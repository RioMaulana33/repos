  <template>
      <footer class="bg-gray-900 text-white relative">
        <!-- Wavy SVG -->
        <div class="absolute top-0 left-0 w-full overflow-hidden" style="transform: translateY(-99%);">
          <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V120Z" fill="#111827"/>
          </svg>
        </div>
    
        <!-- Footer Content -->
        <div class="container mx-auto px-4 lg:px-8 py-12 flex flex-col lg:flex-row justify-between items-center space-y-8 lg:space-y-0">
          <!-- Logo and Brand -->
          <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
            <img src="/media/SociaLenzz.png" alt="SociaLens Logo" class="w-32 h-auto mb-4 rounded-full">
            <p class="text-gray-400 max-w-xs mx-auto">Website ini adalah sebuah platform digital yang dirancang untuk mengumpulkan, menampilkan, dan menganalisis data sosial dalam berbagai bentuk.</p>
          </div>
    
          <!-- Footer Navigation -->
          <div class="flex flex-col lg:flex-row lg:space-x-8">
            <div class="flex flex-col space-y-2">
              <h4 class="font-semibold">Company</h4>
              <a href="#" class="text-gray-400 hover:text-gray-300">About Us</a>
              <a href="#" class="text-gray-400 hover:text-gray-300">Careers</a>
              <a href="#" class="text-gray-400 hover:text-gray-300">Blog</a>
            </div>
            <div class="flex flex-col space-y-2 mt-8 lg:mt-0">
              <h4 class="font-semibold">Support</h4>
              <a href="#" class="text-gray-400 hover:text-gray-300">Help Center</a>
              <a href="#" class="text-gray-400 hover:text-gray-300">Contact Us</a>
              <a href="#" class="text-gray-400 hover:text-gray-300">Privacy Policy</a>
            </div>
          </div>
    
          <!-- Contact Information -->
          <div class="flex flex-col items-center lg:items-end">
            <h4 class="font-semibold">Contact Us</h4>
            <p class="text-gray-400">Email: <a href="mailto:info@sociaLenz.com" class="text-gray-300 hover:text-gray-100">info@sociaLenz.com</a></p>
            <p class="text-gray-400">Phone: <a href="tel:+1234567890" class="text-gray-300 hover:text-gray-100">+123 456 7890</a></p>
          </div>
        </div>
    
        <!-- Footer Bottom -->
        <div class="border-t border-gray-700 mt-8 pt-4">
          <p class="text-center text-gray-500">&copy; 2024 SociaLenz. All Rights Reserved.</p>
        </div>
      </footer>
    </template>
    
    <script setup>
    // Import any additional components if needed
    </script>
    
    <style scoped>
    /* Your existing styles */
    
    /* Styles for the wavy top */
    .wavy-top {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      overflow: hidden;
      line-height: 0;
      transform: translateY(-99%);
    }
    
    .wavy-top svg {
      position: relative;
      display: block;
      width: calc(100% + 1.3px);
      height: 120px;
    }
    
    .wavy-top .shape-fill {
      fill: #111827; /* This should match your footer background color */
    }
    
    /* Ensure text does not extend too far */
    footer p {
      overflow-wrap: break-word; /* Break long words */
    }
    </style>
    