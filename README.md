# Setting a page template for wordpress plugin - Wordpress eklenti için sayfa şablonu ayarlama
 Setting a page template for wordpress plugin - Wordpress eklenti  için sayfa şablonu ayarlama

# Kullanımı Türkçe
 Sınıfı kullanmak için sınıf dosyanızı projenize dahil edin.

 Daha sonrasında bir değişkene sayfa şablon dosya adınızı ve sayfa şablonuzun adını anahtar değer olarak ekleyin aşağıda ki gibi.

 $sablonlar = array(
     'sablon-dosya-adi' => 'ŞABLON ADI'
 );

 Sınıfı başlatmak için aşağıda ki şekilde sınıfı "new" anahtar kelimesi ile başlatın.

 Toplam 3 parametre almaktadır bunlar

 1. Şablon dosya adı ve şablon adı
 2. Text Domain
 2. Eklenti dizini veya eklenti içerisinde herhangi bir dizin yolu

 # Parametrelerin işlevi

 1. Parametre zorunludur. Şablon dosya adı ve şablon adını içermelidir.

 2. Parametre opsiyoneldir. Eğer eklentiniz için kullandığınız bir "Text Domain" var ise yani wordpress dil çeviri fonksiyonunu kullanırken kullandığınız "__( 'Metin', "Text Domain" );" bunu ekleyin.

 3. Parametre opsiyoneldir. Eğer eklemezseniz dosyanın bulunduğu dizini referans alır yani sayfa şablon dosyalarınız da burada olmalıdır. Eğer bir dizin belirtirseniz. Sayfa şablonlarınız bu dizinde olmalıdır.

 new bc_page_template( $sablonlar );

 # Use of English

 To use the class, include your class file in your project.

 Then add your page template filename and the name of your page template as a key value to a variable as below.

 $templates = array(
     'template-file-name' => 'TEMPLATE NAME'
 );

 To initialize the class, start the class with the keyword "new" as follows.

 It takes 3 parameters in total.

 1. Template filename and template name
 2. Text Domain
 3. Plugin directory or any directory path within plugin

 # Function of parameters

 1. The parameter is required. The template must contain a filename and template.

 2. The parameter is optional. If you have a "Text Domain" that you use for your plugin, that is, "__( 'Text', "Text Domain" );" when using the wordpress language translation function. add this.

 3. The parameter is optional. If you don't add it, it will reference the directory where the file is located, so your page template files should also be here. If you specify a directory. Your page templates should be in this directory.

 new bc_page_template( $sablonlar );