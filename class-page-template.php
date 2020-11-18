<?php

class bc_page_template{

    private $templates;
    private $text_domain;
    private $path;

    function __construct( $templates, $text_domain = null, $path = null ){

        $this->templates = $templates;
        $this->text_domain = $text_domain;
        $this->path = $path;
        
        add_filter( 'page_template', array( $this, 'bc_set_page_template' ) );
        add_filter( 'theme_page_templates', array( $this, 'bc_save_page_template' ), 10, 4 );

    }

    // Set the selected page template for the loaded page.
    public function bc_set_page_template( $page_template ){

        // Open the incoming templates array.
        foreach ( $this->templates as $template_file => $template_name ) {

            $template_file = $template_file  . '.php';

            if ( get_page_template_slug() == $template_file ) {

                if ( $this->path == null ){
                    $page_template_plc = plugin_dir_path( __FILE__ ) . $template_file;
                } else {
                    $page_template_plc = $this->path . $template_file;
                }

                // If there is such a file, open the file, otherwise the normal page template works.
                if ( file_exists( $page_template_plc ) )
                    $page_template = $page_template_plc;
                
            }

        }

        return $page_template;

    }

    // For the Add new page section, add the page template to the listing section.
    public function bc_save_page_template( $post_templates ) {

        // Open the incoming templates array.
        foreach ( $this->templates as $template_file => $template_name ) {

            $template_name = __( $template_name );

            // If the extension has a text domain.
            if ( $this->text_domain != null )
                $template_name = __( $template_name, $this->text_domain );

            $post_templates[$template_file.'.php'] = $template_name;

        }

        return $post_templates;

    }

}