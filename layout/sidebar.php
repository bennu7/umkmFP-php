                            <ul class="nav nav-vertical">
                                <li class="nav-item">
                                    <a href="#menu-account" class="nav-link active" data-bs-toggle="collapse"
                                        aria-expanded="true">
                                        <span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M8 9l3 3l-3 3" />
                                                <line x1="13" y1="15" x2="16" y2="15" />
                                                <rect x="4" y="4" width="16" height="16" rx="4" /></svg>
                                        </span>
                                        Account Setting
                                        <span class="nav-link-toggle"></span>
                                    </a>
                                    <ul class="nav nav-pills collapse show" id="menu-account">
                                        <li class="nav-item">
                                            <a href="https://waskita.test/account" class="nav-link" id='account'>
                                                Change Account Data
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="https://waskita.test/account/change-password.html" class="nav-link" id='change-password'>
                                                Change Password
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <script type="text/javascript">
                                $(document).ready(function () {
                                    var current = location.href;
                                    if  (current == 'https://waskita.test/account/') {
                                        $('#account').addClass('active')
                                    } else if(current == 'https://waskita.test/account/change-password.html') {
                                        $('#change-password').addClass('active')
                                    }
                                });
                            </script>