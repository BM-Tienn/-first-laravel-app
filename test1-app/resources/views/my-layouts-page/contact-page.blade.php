<x-my-page>
    <x-slot name="header">
       
    </x-slot>

    <div class="contact-text">
        <div class="contact-from">
            <h2>Get In Touch</h2>
            <form>
                <input type="text" value="" placeholder="   Name">
                <input type="text" value="" placeholder="  Address">
                <input type="number" value="" placeholder="  Phone">
                <textarea value="" placeholder="   Message"></textarea>
            </form>
        </div>
    </div>

    <x-slot name="footer">
        <h4> {{ __('Contact Page') }} </h4>
    </x-slot>
</x-my-page>