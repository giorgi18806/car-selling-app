<x-app-layout title="Home Page">

  <main>
      <x-search-form></x-search-form>

      <!-- New Cars -->
      <section>
        <div class="container">
          <h2>Latest Added Cars</h2>
          <div class="car-items-listing">
            @for ($price = 1; $price <= 15; ++$price)
              <x-car-item :$price />
            @endfor
          </div>
        </div>
      </section>
      <!--/ New Cars -->
  </main>
  <x-slot:footerLinks>
    <a href="#">Link 3</a>
    <a href="#">Link 4</a>
  </x-slot:footerLinks>
</x-app-layout>