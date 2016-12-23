function printRandomFruit () {

        var fruitArray = [
        "jackfruit" ,
        "papaya" ,
        "pineapple" ,
        "mango" ,
        "kumquat",
        "persimmon",
        "guava"
        ] ;
        
        var random_fruit = fruitArray[Math.floor(Math.random() * fruitArray.length)];
        document.write(random_fruit) ;
    }

