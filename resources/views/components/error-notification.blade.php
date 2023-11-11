<div class="w-96 bg-white shadow-xl fixed right-10 top-5 z-50 rounded-lg p-5 notification">
  <div class="flex justify-between">
    <div class="flex gap-4 items-center">
      <i class="w-6 text-red-600  " data-feather="x-circle"></i>
      <div>
        <p class="font-semibold">{{ $message }}</p>
      </div>
    </div>
    <div class="text-gray-400 cursor-pointer" id="close-notification">
      <i data-feather="x"></i>
    </div>
  </div>
  <div class="mt-2 ml-10">
    <p class="text-sm">You can now close this notification popup.</p>
  </div>
</div>

<script>
  document.getElementById('close-notification').addEventListener('click', function() {
    document.querySelector('.notification').style.display = 'none';
  });
</script>
