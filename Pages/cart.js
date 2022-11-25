$(document).ready(function() {
/* This section is for the cart */

    $('.cartButton').click(function(){
        var sum = 0.0;
        var prices = $('.price').html();
        prices = parseInt(prices, 10);
        
        $('.itemTable').find('.price').each(function(){
            var price = $('.price').html();
            var quantity = $('#amount3').val();
            price = parseInt(price,10);
            alert(quantity);
            alert(price);
            var amount = (quantity*price);
            sum += amount;
        });
        alert(sum);
    });

});

