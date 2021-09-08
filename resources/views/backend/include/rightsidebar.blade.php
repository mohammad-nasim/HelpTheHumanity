<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <a href="{{ route('logout') }}"
      onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">Logout</a>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        </form>
    </div>
  </aside>
