  <div class="m-2 flex flex-col space-y-2">
      {{-- nama app name pada config --}}
      <h2>{{ config('app.name') }}</h2>
      <p>username :{{ auth()->user()->name }}</p>

      <ul>
          <li>
              <div class="{{ request()->is('admin') ? 'bg-violet-400' : '' }}">
                  <i class="fa-solid fa-gauge"></i>
                  <a href="/admin">Dashboard</a>
              </div>
          </li>
          @if (auth()->user()->role == 'admin')
              <li>
                  <div class="">
                      <i class="fa-solid fa-user"></i>
                      <a href="/user">User</a>
                  </div>
              </li>
          @endif
          <li>
              <div class="">
                  <i class="fa-solid fa-power-off"></i>
                  <a href="/logout">Logout</a>
              </div>
          </li>
      </ul>
  </div>
