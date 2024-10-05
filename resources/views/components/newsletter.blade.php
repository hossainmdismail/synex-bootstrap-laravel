<section>
    <div class="container py-md-4">
        <div class="row py-5 d-flex justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <svg class="footer-logo" width="60" height="60" viewBox="0 0 53 52" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M23.3877 51.8538C19.3841 51.8538 15.3805 51.8768 11.3768 51.8439C8.91485 51.8242 7.34035 49.6219 8.04049 47.2651C8.43822 45.9338 9.64128 45.0233 11.3111 44.9576C13.5233 44.8688 15.742 44.8557 17.9575 44.8425C23.46 44.8097 28.9691 44.9115 34.4683 44.7373C39.4942 44.5796 43.5898 40.8258 44.6778 35.7473C45.6968 30.9811 43.271 25.7974 38.9551 23.5195C37.3149 22.655 35.5826 22.2047 33.7221 22.208C28.8244 22.2211 23.9268 22.2014 19.0324 22.2178C17.757 22.2211 16.7314 21.7609 15.9951 20.7288C14.3089 18.3588 15.6434 15.3282 18.6905 15.2099C24.7551 14.9732 30.8788 14.5459 36.8908 15.5188C44.4017 16.735 49.1844 21.4322 51.3308 28.6374C54.414 38.9817 47.462 49.8388 36.7758 51.6335C34.5012 52.0148 32.2134 51.8078 29.9322 51.8439C27.7496 51.8834 25.567 51.8538 23.3877 51.8538Z"
                        fill="#3B82F6" />
                    <path
                        d="M30.173 37.0392C25.8769 36.7367 21.5709 37.0523 17.2747 36.8288C11.5257 36.5297 7.12103 33.7127 3.83399 29.1338C-4.03518 18.1584 2.49617 2.63042 15.8185 0.513569C18.2312 0.132273 20.6505 -0.0057831 23.073 0.296625C25.3477 0.57931 26.6625 2.85065 25.8473 4.99052C25.3674 6.25603 24.4372 7.01205 23.0928 7.24543C21.5676 7.50839 20.0259 7.34075 18.4942 7.39006C13.0837 7.56098 8.74812 11.2293 7.72914 16.5215C6.45048 23.1613 11.1838 29.3639 17.9157 29.7912C23.0172 30.1134 28.1318 29.8701 33.2366 29.9392C35.2449 29.9654 36.5762 30.8792 37.0791 32.5523C37.7201 34.6791 36.139 36.9471 33.9203 37.0293C32.6745 37.0786 31.4254 37.0392 30.173 37.0392Z"
                        fill="#374151" />
                </svg>

            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 text-center mt-3" data-aos="fade-up">
                <p class="footer-title">
                    Subscribe To Your Newsletter and Get Exciting Offers and Discounts
                </p>
            </div>
            <div class="col-md-5 text-center mt-3" data-aos="fade-up">
                <form action="{{ route('subscribe') }}" method="POST">
                    @csrf
                    <div class="email-input-container mt-4">
                        <input type="email" placeholder="person@email.com" name="email" class="email-input">
                        <button name="btn" type="submit" class="send-button">
                            <!-- Include your SVG arrow here -->
                            <svg width="47" height="47" viewBox="0 0 47 47" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.25" y="0.868164" width="46" height="46" rx="23"
                                    fill="#3B82F6" />
                                <path
                                    d="M32.25 16.8682L13.25 24.3682L20.25 25.3682M32.25 16.8682L29.75 31.8682L20.25 25.3682M32.25 16.8682L20.25 25.3682M20.25 25.3682V30.8682L23.4988 27.591"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
