

<div class="flex flex-col mt-10">
  <ul class="flex">
    <li class="mr-6 cursor-pointer font-bold text-lg text-gray-800" onclick="displayTab(1)">Tab 1</li>
    <li class="mr-6 cursor-pointer font-bold text-lg text-gray-800" onclick="displayTab(2)">Tab 2</li>
    <li class="mr-6 cursor-pointer font-bold text-lg text-gray-800" onclick="displayTab(3)">Tab 3</li>
  </ul>
  <div id="tab-1" class="py-6 border-t border-gray-300">
    Tab 1 Content
  </div>
  <div id="tab-2" class="hidden py-6 border-t border-gray-300">
    Tab 2 Content
  </div>
  <div id="tab-3" class="hidden py-6 border-t border-gray-300">
    Tab 3 Content
  </div>
</div>

<script>
  function displayTab(tab) {
    let tabs = [1, 2, 3];
    tabs.forEach(function (t) {
      let tabId = "tab-" + t;
      if (t === tab) {
        document.getElementById(tabId).classList.remove("hidden");
      } else {
        document.getElementById(tabId).classList.add("hidden");
      }
    });
  }
</script>



<!-- HTML for tabs and content -->
<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <p class="font-happy">font happy</p>
      <p class="font-happy italic">font happy</p>
      <p class="font-moderat">font moderat</p>
    </div>
    <div class="swiper-slide">
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat debitis quaerat aliquam eligendi accusantium beatae voluptatum recusandae exercitationem alias nobis.
    </div>
    <!-- More slides for additional tabs -->
  </div>
</div>

<!-- Include Swiper JS -->


<!-- Initialize Swiper -->
