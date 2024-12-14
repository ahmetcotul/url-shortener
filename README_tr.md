# URL Shortener Project

Bu projede, bir URL kısaltma servisi oluşturulmuştur. Kullanıcılar, uzun URL'lerini kısaltabilir ve kısa URL'ye tıkladığında, onları orijinal URL'ye yönlendiren bir sistem geliştirilmiştir. Laravel framework'ü kullanılarak hazırlanmıştır.

## Ekran Görüntüleri

![](/screenshots/screenshot.png)
![](/screenshots/url-shortener-screenrec.gif)


## Özellikler
- Kullanıcı, uzun bir URL girerek kısaltabilir.
- Kısaltılmış URL, kullanıcıya gösterilir ve tıklanarak yönlendirme yapılır.
- URL veritabanında saklanır ve her kısaltma işlemi için benzersiz bir kod oluşturulur.

## Başlangıç

Projenin çalıştırılması için bazı adımlar gereklidir. Bu yönergeleri takip ederek projeyi bilgisayarınızda çalıştırabilirsiniz.

### Gereksinimler

- **PHP** (En az PHP 8.x sürümü)
- **Composer** (PHP için paket yöneticisi)
- **MySQL** (Veritabanı için)
- **Laravel** (Framework)
- **Git** (Proje kodunu klonlamak için)

---

### Adım 1: Projeyi Klonla

Öncelikle bu projeyi GitHub'dan klonlayın.

```bash
git clone https://github.com/ahmetcotul/url-shortener.git
cd url-shortener
```

---

### Adım 2: Composer ile Bağımlılıkları Yükle

Projede kullanılan bağımlılıkları yüklemek için **Composer** kullanmanız gerekecek. Aşağıdaki komut ile tüm bağımlılıkları yükleyin:

```bash
composer install
```

---

### Adım 3: Veritabanı Ayarlarını Yap

**.env** dosyasını açın ve aşağıdaki veritabanı ayarlarını yapın:

- Eğer **MySQL** kullanıyorsanız, veritabanı bilgilerini aşağıdaki gibi ayarlayın:
  
  ```env
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=url_shortener
  DB_USERNAME=root
  DB_PASSWORD=secret
  ```

- Eğer **SQLite** kullanacaksanız, **DB_CONNECTION=sqlite** olarak değiştirin ve **DB_DATABASE** değerini doğru yolu belirtecek şekilde ayarlayın.

Örnek bir SQLite ayarı:
  
```env
DB_CONNECTION=sqlite
DB_DATABASE=/path/to/database/database.sqlite
```

---

### Adım 4: Veritabanı Migrasyonlarını Çalıştır

Veritabanı tablolarını oluşturmak için aşağıdaki komutu çalıştırın:

```bash
php artisan migrate
```

Bu komut, gerekli veritabanı tablolarını oluşturacaktır.

---

### Adım 5: Uygulamayı Çalıştır

Projenizi çalıştırmak için aşağıdaki komutu kullanın:

```bash
php artisan serve
```

Bu komut, projeyi **http://localhost:8000** adresinde çalıştıracaktır.
Eğer siz de benim gibi sorun yaşarsanız ekstra komutları veriyorum.


```bash
#bir komut satırından bunu çalıştır:
php -S localhost:8000 -t public/

#diğerinden ise bu komutu:
composer run dev
```

---

### Adım 6: Tarayıcıda Test Et

Tarayıcınızda **http://localhost:8000** adresine gidin. Uzun bir URL girin ve **Shorten** butonuna tıklayın. Kısa URL'niz hemen ekranda görünecektir. Bu kısa URL'ye tıkladığınızda sizi doğru adrese yönlendirdiğinden emin olun.

---

## Katkıda Bulunma

Projenizi geliştirmek veya katkıda bulunmak isterseniz, aşağıdaki adımları takip edebilirsiniz:

1. Fork'layın.
2. Yeni bir branch oluşturun: `git checkout -b yeni-ozellik`
3. Değişikliklerinizi yapın ve commit edin: `git commit -am 'Yeni özellik ekledim'`
4. Push yapın: `git push origin yeni-ozellik`
5. Pull request oluşturun.

---

## Lisans

Bu proje **MIT Lisansı** altında lisanslanmıştır - daha fazla bilgi için [LICENSE]() dosyasına bakın.

---

NOT: **Projenin sorunsuz çalışması için PHP 8.x ve Composer yüklü olmalıdır. Ayrıca, MySQL veya SQLite veritabanı kurulumunu doğru şekilde yapmalısınız.** 
