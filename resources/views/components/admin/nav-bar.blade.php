  <nav id="topbar"
      class="fixed inset-x-0 z-50 block duration-300 border-b topbar dark:border-slate-700/40 print:hidden">
      <div
          class="mx-0 flex max-w-full flex-wrap items-center lg:mx-auto relative top-[50%] start-[50%] transform -translate-x-1/2 -translate-y-1/2">
          <div class="ltr:mx-2 rtl:mx-2">
              <button id="toggle-menu-hide" class="relative flex rounded-full button-menu-mobile md:me-0">
                  <i data-lucide="menu" class="w-5 h-5 top-icon"></i>
              </button>
          </div>

          <div class="flex items-center order-1 ltr:ms-auto rtl:ms-0 rtl:me-auto md:order-2">
              <div class="relative ltr:me-2 ltr:md:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4 dropdown">
                  <button type="button" class="flex rounded-full dropdown-toggle md:me-0" aria-expanded="false"
                      data-fc-autoclose="both" data-fc-type="dropdown">
                      <span data-lucide="search" class="w-5 h-5 top-icon"></span>
                  </button>

                  <div class="left-auto right-0 z-50 my-1 hidden min-w-[300px]
                    list-none divide-y  divide-gray-100 rounded-md border-slate-700
                    md:border-white text-base shadow dark:divide-gray-600 bg-white
                    dark:bg-slate-800"
                      onclick="event.stopPropagation()">
                      <div class="relative">
                          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                              <i class="z-10 text-gray-400 ti ti-search"></i>
                          </div>
                          <input type="text" id="email-adress-icon"
                              class="block w-full rounded-lg border border-slate-200 dark:border-slate-700/60 bg-slate-200/10 p-1.5
                        pl-10 text-slate-600 dark:text-slate-400 outline-none focus:border-slate-300
                        focus:ring-slate-300 dark:bg-slate-800/20 sm:text-sm"
                              placeholder="Search..." />
                      </div>
                  </div>
              </div>
              <div class="ltr:me-2 ltr:md:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4">

                  <button id="toggle-theme" class="relative flex rounded-full md:me-0">
                      <span data-lucide="moon" class="w-5 h-5 top-icon light "></span>
                      <span data-lucide="sun" class="hidden w-5 h-5 top-icon dark"></span>
                  </button>
              </div>
              <div class="relative ltr:me-2 ltr:lg:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4 dropdown">
                  <button type="button" class="flex rounded-full dropdown-toggle md:me-0" id="Notifications"
                      aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                      <span data-lucide="bell" class="w-5 h-5 top-icon"></span>
                  </button>

                  <div class="right-0 left-auto z-50 hidden w-64 my-1 text-base list-none bg-white border divide-y divide-gray-100 rounded shadow h-52 border-slate-700/10 dark:divide-gray-600 dark:bg-slate-800"
                      id="navNotifications" data-simplebar>
                      <ul class="py-1" aria-labelledby="navNotifications">
                          <li class="px-4 py-2">
                              <a href="javascript:void(0);" class="dropdown-item">
                                  <div class="flex">
                                      <div class="inline-flex w-8 h-8 rounded-full bg-primary-500/20 me-3">
                                          <span data-lucide="shopping-cart"
                                              class="self-center inline-block w-4 h-4 mx-auto text-primary-500 dark:text-primary-400"></span>
                                      </div>
                                      <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                          <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300">
                                              Karen Robinson</p>
                                          <p class="mb-0 text-xs text-gray-500 truncate dark:text-gray-400">
                                              Hey ! i'm available here
                                          </p>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="px-4 py-2">
                              <a href="javascript:void(0);" class="dropdown-item">
                                  <div class="flex">
                                      <img class="object-cover w-8 h-8 rounded-full shrink-0 me-3"
                                          src="admin-assets/images/users/avatar-3.png" alt="logo" />
                                      <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                          <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300">
                                              Your order is placed</p>
                                          <p class="mb-0 text-xs text-gray-500 truncate dark:text-gray-400">
                                              Dummy text of the printing and industry.
                                          </p>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="px-4 py-2">
                              <a href="javascript:void(0);" class="dropdown-item">
                                  <div class="flex">
                                      <div class="inline-flex w-8 h-8 rounded-full bg-primary-500/20 me-3">
                                          <span data-lucide="user"
                                              class="self-center inline-block w-4 h-4 mx-auto text-primary-500 dark:text-primary-400"></span>
                                      </div>
                                      <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                          <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300">
                                              Robert McCray</p>
                                          <p class="mb-0 text-xs text-gray-500 truncate dark:text-gray-400">
                                              Good Morning!
                                          </p>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="px-4 py-2">
                              <a href="javascript:void(0);" class="dropdown-item">
                                  <div class="flex">
                                      <img class="object-cover w-8 h-8 rounded-full shrink-0 me-3"
                                          src="admin-assets/images/users/avatar-9.png" alt="logo" />
                                      <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                          <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300">
                                              Meeting with designers</p>
                                          <p class="mb-0 text-xs text-gray-500 truncate dark:text-gray-400">
                                              It is a long established fact that a reader.
                                          </p>
                                      </div>
                                  </div>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="relative me-2 dropdown">
                  <button type="button"
                      class="flex items-center text-sm rounded-full dropdown-toggle focus:bg-none focus:ring-0 dark:focus:ring-0 md:me-0"
                      id="user-profile" aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                      <img class="w-8 h-8 rounded-full" src="admin-assets/images/users/avatar-1.png" alt="user photo" />
                      <span class="hidden text-left ltr:ms-2 rtl:ms-0 rtl:me-2 xl:block">
                          <span
                              class="block font-medium text-slate-600 dark:text-gray-300">{{ Auth::user()->name }}</span>
                          <span
                              class="-mt-0.5 block text-xs text-slate-500 dark:text-gray-400">{{ Auth::user()->role }}</span>
                      </span>
                  </button>

                  <div class="right-0 left-auto z-50 hidden w-40 my-1 text-base list-none bg-white border divide-y divide-gray-100 rounded shadow border-slate-700/10 dark:divide-gray-600 dark:bg-slate-800"
                      id="navUserdata">

                      <ul class="py-1" aria-labelledby="navUserdata">
                          <li>
                              <a href="{{ route('profile.edit') }}"
                                  class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-gray-50 dark:text-gray-200 dark:hover:bg-gray-900/20 dark:hover:text-white">
                                  <span data-lucide="user"
                                      class="inline-block w-4 h-4 text-slate-800 dark:text-slate-400 me-2"></span>
                                  Profile</a>
                          </li>
                          <li>
                              <form action="{{ route('logout') }}" method="POST">
                                  @csrf
                                  <button type="submit"
                                      class="flex items-center px-3 py-2 text-sm text-red-500 hover:bg-gray-50 hover:text-red-600 dark:text-red-500 dark:hover:bg-gray-900/20 dark:hover:text-red-500">
                                      <span data-lucide="power"
                                          class="inline-block w-4 h-4 text-red-500 dark:text-red-500 me-2"></span>
                                      Sign out
                                  </button>
                              </form>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </nav>
