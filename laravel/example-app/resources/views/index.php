<?php
echo "Hello World";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Roboto:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>
<body>
<nav class="navbar">
    <div class="navbar-column">
        <img src="./img/nav1.png" alt="nav1">
    </div>
    <div class="navbar-column2">
<div class="image-sequence">
<div id="cart-icon">
    <i class="fa fa-shopping-cart"></i>
    <span id="cart-count">0</span>
</div>
    <img src="img/0.png" alt="Image 1">
    <img src="img/1.png" alt="Image 2">
    <img src="img/2.png" alt="Image 3">
</div>
<hr>
<div class="image-and-text">
    <img src="img/3.png" alt="Another Image">
    <p>ВХОД</p>
</div>
<hr>
<div class="image-sequence">
    <img src="img/4.png" alt="Image 4" >
    <img src="img/5.png" alt="Image 5" >
</div>
<hr>
<div class="image-and-text">
    <img src="img/6.png" alt="Another Image">
    <p>02 478 32 48</p>
</div>
</div>
    </nav>
 
    <nav class="second-navbar">
        <div class="button-container">
            <button class="nav-button1">
                <img src="img/image1.png" alt="Image 2" class="nav-image1">
            </button>
            <button class="nav-button2">
                <img src="img/image2.png" alt="Image 2" class="nav-image2">
                Авточасти
            </button>
            <button class="nav-button3">
                <img src="img/image3.png" alt="Image 2" class="nav-image3">
                Борса Части
            </button>
            <button class="nav-button4">
                <img src="img/image4.png" alt="Image 2" class="nav-image4">
                Автоборса
            </button>
            <button class="nav-button5">
                <img src="img/image5.png" alt="Image 2" class="nav-image5">
                Продава Коли
            </button>
            <button class="nav-button6">
                <img src="img/image6.png" alt="Image 2" class="nav-image6">
                Продава Части
            </button>
            <button class="nav-button7">
                <img src="img/image7.png" alt="Image 2" class="nav-image7">
                Игри
            </button>
            <button class="nav-button8">
                <img src="img/image8.png" alt="Image 2" class="nav-image8">
                Заст
                <img src="img/bn-vector.png" alt="img" class="nav-img-pointer">
            </button>
          
        </div>
        <div class="pointer">
            <img src="img/pointer.png" alt="pointer"  class="pointer-image">
        </div>
    </nav>
    

    <div class="blue-container">
        <div class="rounded-container">
            <img src="./img/srcheader.png" alt="Image 1" class="first-image">
            <div class="search-bar">
                <input type="text" class="srcbar" placeholder="Търсене на Част, марка, категория, обява или др.">
                <button class="search-button">Търсене</button>
            </div>
            <div class="button-container">
                <button class="first-button">Всичко</button>
                <button class="second-button">Авточасти</button>
                <button class="third-button">Борса Части</button>
                <button class="forth-button">Автоборса</button>
                <button class="fifth-button">Продава Коли</button>
                <button class="sixth-button">Продава Части</button>
            </div>
        </div>
    </div>

<div class="image-container">
    <img src="img/main-img.png" alt="Main Image" class="main-image">
    <div class="button-overlay">
        <button class="change-image-button" onclick="changeImage('img/main-img.png')"></button>

<button class="revert-image-button" onclick="revertImage('img/main-img.png')"></button>
</div>
</div>

<div class="new-container">
    <div class="column">
        <div class="half">
            <img class="column-image" src="img/vector1.png" alt="Image 1">
        </div>
        <div class="half">
            <div class="column-content">
                <h3>Експресна доставка</h3>
                <p>Доставяме до всяка точка на България</p>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="half">
            <img class="column-image" src="img/vector2.png" alt="Image 2">
        </div>
        <div class="half">
            <div class="column-content">
                <h3>Ежедневно зареждаме нова стока</h3>
                <p>Нови части всеки ден</p>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="half">
            <img class="column-image" src="img/vector3.png" alt="Image 3">
        </div>
        <div class="half">
            <div class="column-content">
                <h3>Проверено качество</h3>
                <p>Авточасти с гаранция</p>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="half">
            <img class="column-image" src="img/vector4.png" alt="Image 4">
        </div>
        <div class="half">
            <div class="column-content">
                <h3>Право на връщан</h3>
                <p>14 дни право на връщане на всяка поръчка</p>
            </div>
        </div>
    </div>
</div>
<div class="firstrow-container">
    <div class="inner-container">
        <img src="img/1.1.png" alt="Image" class="container-image">
        <div class="title">
            <h2>Авточасти</h2>
        </div>
        <div class="text">
            <p>Най-големият онлайн магазин
                за авточасти в България
            </p>
        </div>
        <button class="custom-button">
            Разгледай
            <img src="img/1.2.png" alt="Icon" class="button-icon">
        </button>
    </div>
    <div class="additional-container">
        <div class="title">
            <h3>Специални предложения:</h3>
        </div>
        <div class="images-container">
          <!-- Първа колона -->
<div class="image-column">
    <img src="img/1.3.png" alt="Image 1">
    <div class="image-text">
        <p>Фар за Audi A5 Coupe 5 I (06.2007 - 01.2017), купе, позиция: дясна</p>
        <div class="column-left">
            <p>Кат.№:s_167232784</p>
        </div>
        <div class="column-right">
            <p>967,70лв.</p>
        </div>
    </div>
</div>

<!-- Втора колона -->
<div class="image-column">
    <img src="img/1,4.png" alt="Image 2">
    <div class="image-text">
        <p>Фар за Audi A5 Coupe 5 I (06.2007 - 01.2017), купе, позиция: дясна</p>
        <div class="column-left">
            <p>Кат.№:s_167232784</p>
        </div>
        <div class="column-right">
            <p>967,70лв.</p>
        </div>
    </div>
</div>

<!-- Трета колона -->
<div class="image-column">
    <img src="img/1.3.png" alt="Image 3">
    <div class="image-text">
        <p>Фар за Audi A5 Coupe 5 I (06.2007 - 01.2017), купе, позиция: дясна</p>
        <div class="column-left">
            <p>Кат.№:s_167232784</p>
        </div>
        <div class="column-right">
            <p>967,70лв.</p>
        </div>
    </div>
</div>
<!-- Четвърта колона -->
<div class="image-column">
    <img src="img/1,4.png" alt="Image 4">
    <div class="image-text">
        <p>Фар за Audi A5 Coupe 5 I (06.2007 - 01.2017), купе, позиция: дясна</p>
        <div class="column-left">
            <p>Кат.№:s_167232784</p>
        </div>
        <div class="column-right">
            <p>967,70лв.</p>
        </div>
    </div>
</div>

<!-- Пета колона -->
<div class="image-column">
    <img src="img/1.3.png" alt="Image 5">
    <div class="image-text">
        <p>Фар за Audi A5 Coupe 5 I (06.2007 - 01.2017), купе, позиция: дясна</p>
        <div class="column-left">
            <p>Кат.№:s_167232784</p>
        </div>
        <div class="column-right">
            <p>967,70лв.</p>
        </div>
    </div>
</div>

<!-- Шеста колона -->
<div class="image-column">
    <img src="img/1,4.png" alt="Image 6">
    <div class="image-text">
        <p>Фар за Audi A5 Coupe 5 I (06.2007 - 01.2017), купе, позиция: дясна</p>
        <div class="column-left">
            <p>Кат.№:s_167232784</p>
        </div>
        <div class="column-right">
            <p>967,70лв.</p>
        </div>
    </div>
</div>

<div class="image-left">
    <img src="img/Arrow.png" alt="Left Image">
</div>
<div class="image-right">
    <img src="img/Arrow.png" alt="Right Image">
</div>
</div>
</div>
<div class="custom-secondrow-container">
    <div class="custom-image-container">
        <img src="img/2.1.png" alt="Image 1">
        <p>КУПУВАМ Фар за Audi A5 Coupe I (06.2007 - 01.2017)</p>
    </div>
    <div class="custom-image-container">
        <img src="img/2.2.png" alt="Image 2">
        <p>OФЕРТА за Фар за Audi A5 Coupe I (06.2007 - 01.2017)</p>
    </div>
    <div class="custom-image-container">
        <img src="img/2.3.png" alt="Image 3">
        <p>КУПУВАМ Фар за Audi A5 Coupe I (06.2007 - 01.2017)</p>
    </div>
    <div class="custom-right-container">
        <div class="custom-right-image">
            <img src="img/2.4.png" alt="Right Image">
        </div>
        <div class="custom-right-title">
            <h2>Борса части</h2>
        </div>
        <div class="custom-right-text">
            <p>Най-голямата борса за авточасти в България
            </p>
        </div>
        <div class="custom-right-button">
            <button>
                Разгледай
                <img src="img/2,5.png" alt="Arrow">
            </button>
        </div>
    </div>
</div>

<div class="thirdrow-container">
    <div class="custom-subcontainer">
        <div class="custom-item item1">
            <img src="img/3.1.png" alt="Image 1" class="item-image">
            <div class="item-title">Автоборса</div>
            <div class="item-text">Залагане, търгуване и продаване на автомобили.
            </div>
            <div class="item-button">
                <button>
                    Разгледай
                    <img src="img/3.1.1.png" alt="Arrow">
                </button>
            </div>
        </div>
        <div class="custom-item item2">
            <img src="img/3.2.png" alt="Image 1" class="item-image">
            <div class="item-title">Продава коли</div>
            <div class="item-text">Обяви за коли. Част от MEGACARS</div>
            <div class="item-button">
                <button>
                    Разгледай
                    <img src="img/3.2.2.png" alt="Arrow">
                </button>
            </div>
        </div>
        <div class="custom-item item3">
            <img src="img/3.3.png" alt="Image 1" class="item-image">
            <div class="item-title">Продава части</div>
            <div class="item-text">Обяви за части. Част от MEGAОБЯВИ</div>
            <div class="item-button">
                <button>
                    Разгледай
                    <img src="img/3.3.3.png" alt="Arrow">
                </button>
            </div>
        </div>
        <div class="custom-item item4">
            <img src="img/3.4.png" alt="Image 1" class="item-image">
            <div class="item-title">Игри</div>
            <div class="item-text">Забавление за ценители.</div>
            <div class="item-button">
                <button>
                    Разгледай
                    <img src="img/3.4.4.png" alt="Arrow">
                </button>
            </div>
        </div>
    </div>
</div>

<div class="forthrow-container">
    <div class="item-custom item1">
        <img src="img/4.1.png" alt="Image 1" class="item-image">
        <div class="title-item ">Застраховки</div>
        <div class="text-item">Застраховай автомобила си</div>
    </div>
    <div class="item-custom item2">
        <img src="img/4.2.png" alt="Image 2" class="item-image">
        <div class="title-item">Кредити</div>
        <div class="text-item">MEGA в нужда се познава</div>
    </div>
    <div class="item-custom item3">
        <img src="img/4.3.png" alt="Image 3" class="item-image">
        <div class="title-item">Автодневник</div>
        <div class="text-item">Твоят автодневник</div>
    </div>
    <div class="item-custom item4">
        <img src="img/4.4.png" alt="Image 4" class="item-image">
        <div class="title-item">Новини</div>
        <div class="text-item">Всичко в света на колите</div>
    </div>
</div>
</div>


        <section class="sixthrow-container">
    <div class="wrapper">
        <img src="img/map.png" alt="Main Image" class="main-image">
        <div class="button">
            <div class="icon">
               <i class="fa fa-cog" aria-hidden="true" class="left-icon"></i>
            </div>
            <span>Варна</span>
        </div>
        <div class="button"> 
        <div class="icon">
               <i class="fa fa-cog" aria-hidden="true" class="right-icon"></i>
            </div>
            <span>София</span>
        </div>
    </div>
</section>

<div class="container">
        <h2>Добавяне на продукт</h2>
        <form action="process_form.php" method="post">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id"><br><br>

            <label for="name">Име:</label>
            <input type="text" id="name" name="name"><br><br>

            <label for="description">Описание:</label>
            <input type="text" id="description" name="description"><br><br>

            <label for="price">Цена:</label>
            <input type="text" id="price" name="price"><br><br>

            <label for="image_url">URL на изображение:</label>
            <input type="text" id="image_url" name="image_url"><br><br>
            <input type="submit" value="Добави продукт">
            <div id="message-container"></div>

        </form>
    </div>
    <div class="product-container">
        <h3>Продукти</h3>
        <div class="product-card-container" id="product-container">
  <?php foreach ($products as $product): ?>
    <div class="product-card">
      <div class="product-image">
        <img src="<?php echo $product['image_url']; ?>" alt="<?php echo $product['name']; ?>">
      </div>
      <div class="product-details">
        <h2><?php echo $product['name']; ?></h2>
        <p><?php echo $product['description']; ?></p>
        <p><?php echo $product['price']; ?></p>
        
        <a href="product_details.php?id=<?php echo $product['id']; ?>" class="details-button">View Details</a>
      </div>
    </div>
    
  <?php endforeach; ?>
</div>
  </div>

<div class="seventhrow-container">
    <div class="inner-container container1">
        <h2>Полезно за вас</h2>
         <div class="text"><p>Формуляр за връщане
            <br> Мнения за MEGAPARTS
            <br> Регистрирай се за продавач</div></p>
    </div>
    <div class="inner-container container5"> 
        <h2>Онлайн оценка на колата ви</h2>
    </div>
    <div class="inner-container container2">
        <h2> Онлайн пазаруване
        <div class="text">Общи условия на платформа 
            <br> Общи условия на MEGAPARTS Борса
            <br> Общи условия Вендор
            <br> Политика за използване на "бисквитки"
            <br> Политика за защита на лични данни
        </div>
    </div>
    <div class="inner-container container3">
        <h2>За нас
        <div class="text">Представяне
            <br> Социални медии
            <br>02 437 32 48
        </div>
    </div>
    <div class="inner-container container4">
        <img src="img/logo.png" alt="">
        <div class="text">2023 MEGAPARTS Marketplace</div>
        <img src="img/mega.png" alt="">
    </div>
</div>

    <script src="script.js"></script>
    
</body>
</html>
