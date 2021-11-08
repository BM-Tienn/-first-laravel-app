<x-my-page>
    <x-slot name="header">
        
    </x-slot>

    <div class="text-about">
        <div class="text-about-one">
            <h2 id="AboutUs">About Us</h2>
            <span id="text1">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean</span>
            <span id="text2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's typesetting industry. Lorem Ipsum has been the industry' standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lore passages,
                <img src="./img/about1.jpg"></span>
            <span id="text3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's typesetting industry. Lorem Ipsum has been the industry' standard dummy text ever since the 1500s, when an</span>
        </div>
        <div class="text-about-two">
            <h2>Recent Blogs</h2>
            <span class="about-span">
                <img src="./img/about2.jpg">
                <p><a href="">Lorem Lipsum imperdiet domai</a><br>
                Sed nisi turpis, pellentesque at ultrices in, dapibuspellentesque at ultrices in, dapibus in magna. Nunc easi diam risus, placerat
                </p>
            </span>
            <span class="about-span">
                <img src="./img/about3.jpg">
                <p><a href="">Lorem Lipsum imperdiet domai</a><br>
                Sed nisi turpis, pellentesque at ultrices in, dapibuspellentesque at ultrices in, dapibus in magna. Nunc easi diam risus, placerat
                </p>
            </span>
            <span class="about-span">
                <img src="./img/about4.jpg">
                <p><a href="">Lorem Lipsum imperdiet domai</a><br>
                Sed nisi turpis, pellentesque at ultrices in, dapibuspellentesque at ultrices in, dapibus in magna. Nunc easi diam risus, placerat
                </p>
            </span>
        </div>
    </div>

    <x-slot name="footer">
        <h4> {{ __('About Page') }} </h4>
    </x-slot>
</x-my-page>