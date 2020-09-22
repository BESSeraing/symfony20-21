<?php


namespace App\Services\Twig;


class LoremGenerator
{

    private const LOREM = "
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum blandit, ante lacinia hendrerit convallis, libero ligula sollicitudin metus, a auctor nibh dolor posuere urna. Fusce est quam, ullamcorper ac luctus ut, venenatis et purus. Donec ultricies tristique placerat. In dignissim justo eget orci porta, in pretium velit posuere. Praesent ac dui eget dolor auctor facilisis. Aliquam vitae est mollis, placerat dui sed, vulputate eros. Mauris viverra vestibulum eros quis facilisis. Pellentesque viverra, urna non molestie congue, velit metus aliquam massa, a lacinia nibh est nec sem. Praesent tincidunt sodales nulla non maximus.

Duis lobortis congue tincidunt. Donec blandit laoreet libero aliquam dictum. Sed a eros erat. Mauris in tortor ipsum. Morbi ex est, tincidunt quis consectetur sed, tincidunt quis ligula. Pellentesque porta a enim id luctus. Duis id leo non tellus blandit hendrerit ac vel est. Integer interdum velit quis eros bibendum molestie.

Integer eget consectetur dui, eget pellentesque massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus mattis sapien non enim maximus semper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse consequat est vel mauris porttitor lobortis. Pellentesque at est et orci placerat luctus eu non mi. Sed tincidunt accumsan dignissim. Quisque accumsan, purus egestas eleifend pulvinar, lorem risus tincidunt magna, at tempus leo tortor nec orci. Proin porttitor tellus in magna fringilla, condimentum imperdiet nisi eleifend. Duis sem erat, cursus eget viverra et, vestibulum in nulla. Duis non rhoncus risus, a mattis odio. Phasellus eget nibh placerat augue facilisis dignissim et id lectus.

Nullam pharetra mauris non dui porttitor, vel pellentesque massa gravida. Phasellus ac egestas dui, in egestas augue. Pellentesque fermentum eros a hendrerit pharetra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum in orci maximus ligula pulvinar dignissim vitae vitae lectus. Aenean nisi velit, porttitor non diam et, finibus convallis dolor. In scelerisque, arcu ut semper fermentum, magna nibh varius enim, sodales vulputate dui lorem at velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur in auctor velit. Donec pharetra justo et elit consectetur rutrum. Curabitur dictum ipsum massa. Etiam et euismod turpis. Praesent vitae suscipit tellus.

Vivamus lacinia elementum erat. Praesent tincidunt tortor purus, vel hendrerit ligula pulvinar interdum. Phasellus tempor, mi et cursus finibus, libero magna pretium nisi, id maximus eros diam non odio. Nulla posuere, lectus vel gravida consectetur, orci neque sodales massa, auctor posuere libero elit vel nisi. Curabitur condimentum libero convallis lorem tristique accumsan. Duis ullamcorper at nulla ut sollicitudin. Morbi at ipsum a ante pretium hendrerit non eget sapien. ";


    public static function generateLorem(int $lenght) {
        return substr(self::LOREM, 0, $lenght);
    }
}