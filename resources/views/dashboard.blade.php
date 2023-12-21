<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-6xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('QR codes') }}
        </h2>
        <div id="typed-strings">
                <p id="typed-text" class="text-lg md:text-2xl" style="font-size:30px;">Begin met uw <strong>gepersonaliseerde</strong> QR code te maken!</p>
            </div>
         
<span class="md:text-3xl font-semibold text-6xl text-gray-800 dark:text-gray-200 leading-tight" id="typed"></span>
    </x-slot>
    @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800  shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                     <form action="">
                        <input type="text" name="qr_codes_text" id="url" placeholder="Enter URL" class="text-gray-900"><br><br>
                        <input type="text" name="qr_code_text" id="qr-code-tekst" placeholder="qr code tekst" class="text-gray-900"><br><br>
                        <div class="relative inline-block text-right">
                           <!-- Button with right-aligned dropdown function -->
                           <button id="dropdownButton" type="button" class="inline-flex items-center justify-center p-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-md hover:bg-gray-100 focus:outline-none focus:ring focus:border-blue-300">
                               <!-- Dropdown icon -->
                               <svg class="w-9 h-9 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                   
                               </svg>
                               <!-- Placeholder for selected image -->
                               <span id="selectedImageText">Select an Image</span>
                           </button>
                           <!-- Right-aligned dropdown menu with images -->
                           <div id="dropdownMenu" class="hidden absolute left-0 mt-2 w-39 bg-white border border-gray-300 rounded-md shadow-lg" style="z-index:2;">
                               <div class="py-2">
                                   <!-- Dropdown items with images -->
                           <!-- Dropdown items with images -->
                                   <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                       <img src="https://www.qr-code-generator.com/wp-content/themes/qr/new_structure/assets/media/images/api_page/elements/eyes/version1.svg" alt="Image 1" class="w-8 h-8 object-cover ">
                                       <span></span>
                                   </a>
                                   <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                       <img src="https://www.qr-code-generator.com/wp-content/themes/qr/new_structure/assets/media/images/api_page/elements/eyes/version2.svg" alt="Image 2" class="w-8 h-8 object-cover ">
                                       <span></span>
                                   </a>
                                   <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                       <img src="https://www.qr-code-generator.com/wp-content/themes/qr/new_structure/assets/media/images/api_page/elements/eyes/version3.svg" alt="Image 3" class="w-8 h-8 object-cover ">
                                       <span></span>
                                   </a>
                                   <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                       <img src="https://www.qr-code-generator.com/wp-content/themes/qr/new_structure/assets/media/images/api_page/elements/eyes/version4.svg" alt="Image 4" class="w-8 h-8 object-cover ">
                                       <span></span>
                                   </a>
                                   <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                       <img src="https://www.qr-code-generator.com/wp-content/themes/qr/new_structure/assets/media/images/api_page/elements/eyes/version5.svg" alt="Image 5" class="w-8 h-8 object-cover ">
                                       <span></span>
                                   </a>
                                   <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                       <img src="https://www.qr-code-generator.com/wp-content/themes/qr/new_structure/assets/media/images/api_page/elements/eyes/version6.svg" alt="Image 6" class="w-8 h-8 object-cover ">
                                       <span></span>
                                   </a>
                                   <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                       <img src="https://www.qr-code-generator.com/wp-content/themes/qr/new_structure/assets/media/images/api_page/elements/eyes/version7.svg" alt="Image 7" class="w-8 h-8 object-cover ">
                                       <span></span>
                                   </a>
                                   <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                       <img src="https://www.qr-code-generator.com/wp-content/themes/qr/new_structure/assets/media/images/api_page/elements/eyes/version8.svg" alt="Image 8" class="w-8 h-8 object-cover ">
                                       <span></span>
                                   </a>
                                   <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                       <img src="https://www.qr-code-generator.com/wp-content/themes/qr/new_structure/assets/media/images/api_page/elements/eyes/version9.svg" alt="Image 9" class="w-8 h-8 object-cover ">
                                       <span></span>
                                   </a>
                                   <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                       <img src="https://www.qr-code-generator.com/wp-content/themes/qr/new_structure/assets/media/images/api_page/elements/eyes/version10.svg" alt="Image 10" class="w-8 h-8 object-cover ">
                                       <span></span>
                                   </a>
                                   <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                       <img src="https://www.qr-code-generator.com/wp-content/themes/qr/new_structure/assets/media/images/api_page/elements/eyes/version11.svg" alt="Image 11" class="w-8 h-8 object-cover ">
                                       <span></span>
                                   </a>
                                   <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                       <img src="https://www.qr-code-generator.com/wp-content/themes/qr/new_structure/assets/media/images/api_page/elements/eyes/version12.svg" alt="Image 12" class="w-8 h-8 object-cover ">
                                       <span></span>
                                   </a>
                                   <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                       <img src="https://www.qr-code-generator.com/wp-content/themes/qr/new_structure/assets/media/images/api_page/elements/eyes/version13.svg" alt="Image 13" class="w-8 h-8 object-cover ">
                                       <span></span>
                                   </a>
                                   <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                       <img src="https://www.qr-code-generator.com/wp-content/themes/qr/new_structure/assets/media/images/api_page/elements/eyes/version15.svg" alt="Image 15" class="w-8 h-8 object-cover ">
                                       <span></span>
                                   </a>
                                   <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                       <img src="https://www.qr-code-generator.com/wp-content/themes/qr/new_structure/assets/media/images/api_page/elements/eyes/version16.svg" alt="Image 16" class="w-8 h-8 object-cover ">
                                       <span></span>
                                   </a>
                                   <!-- Add more items as needed -->
                               </div>
                           </div>
                       </div><br><br>
                       <div class="relative inline-block text-left">
                           <!-- Button with right-aligned dropdown function -->
                           <button id="dropdownButton2" type="button" class="inline-flex items-center justify-center p-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-md hover:bg-gray-100 focus:outline-none focus:ring focus:border-blue-300">
                               <!-- Dropdown icon -->
                               <svg class="w-9 h-9 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                   
                               </svg>
                               <!-- Placeholder for selected image -->
                               <span id="selectedImageText2">Select an Image</span>
                           </button>
                       <div id="dropdownMenu2" class="hidden absolute left-0 mt-2 w-39 bg-white border border-gray-300 rounded-md shadow-lg">
                               <div class="py-2">
                                   <!-- Dropdown items with images -->
                                        <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                            <img src="https://app.qr-code-generator.com/img/patterns/default.png" alt="Image 1" class="w-8 h-8 object-cover ">
                                            <span></span>
                                        </a>
                                        <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                            <img src="https://app.qr-code-generator.com/img/patterns/connect-horizontal.png" alt="Image 2" class="w-8 h-8 object-cover ">
                                            <span></span>
                                        </a>
                                        <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                            <img src="https://app.qr-code-generator.com/img/patterns/dots.png" alt="Image 3" class="w-8 h-8 object-cover ">
                                            <span></span>
                                        </a>
                                        <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                            <img src="https://app.qr-code-generator.com/img/patterns/rounded-1.png" alt="Image 4" class="w-8 h-8 object-cover ">
                                            <span></span>
                                        </a>
                                        <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                            <img src="https://app.qr-code-generator.com/img/patterns/rounded-2.png" alt="Image 4" class="w-8 h-8 object-cover ">
                                            <span></span>
                                        </a>
                                        <a href="#" class="flex items-center px-2 py-2 space-x-2 text-gray-800 hover:bg-gray-100">
                                            <img src="https://app.qr-code-generator.com/img/patterns/square.png" alt="Image 4" class="w-8 h-8 object-cover ">
                                            <span></span>
                                        </a>
                                   </div>
                            </div>
                            </div><br><br>
                            <input type="color" name="foreground_color" id="foreground_color" p>  Foreground color</p><br>
                            <input type="color" name="background_color" id="background_color" p>  Background color</p><br>
                            <input type="color" name="marker_left_inner_color" id="marker_left_inner_color" p>  Marker left inner color</p><br>
                            <input type="color" name="marker_left_outer_color" id="marker_left_outer_color" p>  Marker left outer color</p><br>
                            <input type="color" name="marker_right_inner_color" id="marker_right_inner_color" p>  Marker right inner color</p><br>
                            <input type="color" name="marker_right_outer_color" id="marker_right_outer_color" p>  Marker right outer color</p><br>
                            <input type="color" name="marker_bottom_inner_color" id="marker_bottom_inner_color" p>  Marker bottom inner color</p><br>
                            <input type="color" name="marker_bottom_outer_color" id="marker_bottom_outer_color" p>  Marker bottom outer color</p><br>
                        <input type="submit" value="Generate QR Code" class="">
                     </form>

                    <script>
                    // JavaScript to handle right-aligned dropdown functionality
                    document.getElementById('dropdownButton').addEventListener('click', function() {
                        var dropdownMenu = document.getElementById('dropdownMenu');
                        dropdownMenu.classList.toggle('hidden');
                    });

                    // Close the right-aligned dropdown when clicking outside
                    document.addEventListener('click', function(event) {
                        var dropdownButton = document.getElementById('dropdownButton');
                        var dropdownMenu = document.getElementById('dropdownMenu');

                        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                            dropdownMenu.classList.add('hidden');
                        }
                    });

                    // JavaScript to handle image selection and update button content
                    document.getElementById('dropdownMenu').addEventListener('click', function(event) {
                        var target = event.target;
                        if (target.tagName === 'IMG') {
                            var selectedImage = target.getAttribute('src');
                            var selectedImageText = target.nextElementSibling.innerText;
                            
                            // Update button content and styling
                            document.getElementById('selectedImageText').innerText = selectedImageText;
                            document.getElementById('dropdownButton').style.backgroundImage = `url('${selectedImage}')`;
                            document.getElementById('dropdownButton').style.backgroundSize = 'cover';
                            document.getElementById('dropdownButton').style.backgroundPosition = 'center';
                            document.getElementById('dropdownButton').style.backgroundRepeat = 'no-repeat';
                        }
                    });

                    document.getElementById('dropdownButton2').addEventListener('click', function() {
                        var dropdownMenu2 = document.getElementById('dropdownMenu2');
                        dropdownMenu2.classList.toggle('hidden');
                    });

                    // Close the right-aligned dropdown when clicking outside
                    document.addEventListener('click', function(event) {
                        var dropdownButton2 = document.getElementById('dropdownButton2');
                        var dropdownMenu2 = document.getElementById('dropdownMenu2');

                        if (!dropdownButton2.contains(event.target) && !dropdownMenu2.contains(event.target)) {
                            dropdownMenu2.classList.add('hidden');
                        }
                    });

                    // JavaScript to handle image selection and update button content
                    document.getElementById('dropdownMenu2').addEventListener('click', function(event) {
                        var target = event.target;
                        if (target.tagName === 'IMG') {
                            var selectedImage2 = target.getAttribute('src');
                            var selectedImageText2 = target.nextElementSibling.innerText;
                            
                            // Update button content and styling
                            document.getElementById('selectedImageText2').innerText = selectedImageText2;
                            document.getElementById('dropdownButton2').style.backgroundImage = `url('${selectedImage2}')`;
                            document.getElementById('dropdownButton2').style.backgroundSize = 'cover';
                            document.getElementById('dropdownButton2').style.backgroundPosition = 'center';
                            document.getElementById('dropdownButton2').style.backgroundRepeat = 'no-repeat';
                        }
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>
    
    @endsection

</x-app-layout>
