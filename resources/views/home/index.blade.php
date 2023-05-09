<form method="POST" action="{{ route('user.logout') }}" style="float: right;">
    @csrf
                        <a href="route('user.logout')" class="my-navbar-item"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>