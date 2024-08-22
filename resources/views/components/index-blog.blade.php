<article class="card-1">
    <div class="card-body">
        <div class="card-image-2">
            <img src="{{ asset('Frontend') }}/images/blog.png" width="100%" style="border-radius: 0.5rem;"
                alt="Synex Digital">
        </div>

        <div class="pt-2">
            <div class="d-flex gap-3">
                <!-- Authors -->
                <div class="d-flex gap-1 align-items-center">
                    <svg width="15" height="14" viewBox="0 0 18 17" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.9854 14.1039C13.4031 13.333 12.6498 12.7078 11.7847 12.2776C10.9197 11.8473 9.96655 11.6239 9.00042 11.6248C8.03429 11.6239 7.08115 11.8473 6.2161 12.2776C5.35104 12.7078 4.5977 13.333 4.01542 14.1039M13.9854 14.1039C15.1217 13.0932 15.923 11.761 16.2847 10.284C16.6465 8.80694 16.5506 7.25483 16.01 5.83349C15.4693 4.41215 14.5094 3.18873 13.2574 2.3255C12.0055 1.46227 10.5207 1 9 1C7.4793 1 5.99453 1.46227 4.74259 2.3255C3.49065 3.18873 2.53069 4.41215 1.99003 5.83349C1.44937 7.25483 1.35354 8.80694 1.71527 10.284C2.07699 11.761 2.87917 13.0932 4.01542 14.1039M13.9854 14.1039C12.6138 15.3274 10.8384 16.0024 9.00042 15.9998C7.16211 16.0026 5.38728 15.3276 4.01542 14.1039M11.5004 6.62475C11.5004 7.2878 11.237 7.92368 10.7682 8.39252C10.2993 8.86136 9.66346 9.12475 9.00042 9.12475C8.33738 9.12475 7.70149 8.86136 7.23265 8.39252C6.76381 7.92368 6.50042 7.2878 6.50042 6.62475C6.50042 5.96171 6.76381 5.32583 7.23265 4.85699C7.70149 4.38815 8.33738 4.12475 9.00042 4.12475C9.66346 4.12475 10.2993 4.38815 10.7682 4.85699C11.237 5.32583 11.5004 5.96171 11.5004 6.62475Z"
                            stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <a href="#" class="card-nap">{{ $author }}</a>
                </div>
                <!-- Comments -->
                <div class="d-flex gap-1 align-items-center">
                    <svg width="15" height="14" viewBox="0 0 18 17" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.1875 8.5C6.1875 8.58288 6.15458 8.66237 6.09597 8.72097C6.03737 8.77958 5.95788 8.8125 5.875 8.8125C5.79212 8.8125 5.71263 8.77958 5.65403 8.72097C5.59542 8.66237 5.5625 8.58288 5.5625 8.5C5.5625 8.41712 5.59542 8.33763 5.65403 8.27903C5.71263 8.22042 5.79212 8.1875 5.875 8.1875C5.95788 8.1875 6.03737 8.22042 6.09597 8.27903C6.15458 8.33763 6.1875 8.41712 6.1875 8.5ZM6.1875 8.5H5.875M9.3125 8.5C9.3125 8.58288 9.27958 8.66237 9.22097 8.72097C9.16237 8.77958 9.08288 8.8125 9 8.8125C8.91712 8.8125 8.83763 8.77958 8.77903 8.72097C8.72042 8.66237 8.6875 8.58288 8.6875 8.5C8.6875 8.41712 8.72042 8.33763 8.77903 8.27903C8.83763 8.22042 8.91712 8.1875 9 8.1875C9.08288 8.1875 9.16237 8.22042 9.22097 8.27903C9.27958 8.33763 9.3125 8.41712 9.3125 8.5ZM9.3125 8.5H9M12.4375 8.5C12.4375 8.58288 12.4046 8.66237 12.346 8.72097C12.2874 8.77958 12.2079 8.8125 12.125 8.8125C12.0421 8.8125 11.9626 8.77958 11.904 8.72097C11.8454 8.66237 11.8125 8.58288 11.8125 8.5C11.8125 8.41712 11.8454 8.33763 11.904 8.27903C11.9626 8.22042 12.0421 8.1875 12.125 8.1875C12.2079 8.1875 12.2874 8.22042 12.346 8.27903C12.4046 8.33763 12.4375 8.41712 12.4375 8.5ZM12.4375 8.5H12.125M16.5 8.5C16.5 12.2967 13.1417 15.375 9 15.375C8.28099 15.3759 7.56503 15.2814 6.87083 15.0942C5.8923 15.7824 4.6986 16.0951 3.50833 15.975C3.376 15.9622 3.24422 15.9442 3.11333 15.9208C3.52406 15.4368 3.80456 14.856 3.92833 14.2333C4.00333 13.8525 3.8175 13.4825 3.53917 13.2117C2.275 11.9817 1.5 10.3242 1.5 8.5C1.5 4.70333 4.85833 1.625 9 1.625C13.1417 1.625 16.5 4.70333 16.5 8.5Z"
                            stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <a href="#" class="card-nap">Comments</a>
                </div>
            </div>
            <a href="#" class="card-title font-700 mb-0 pt-2">{{ $title }}</a>
        </div>
    </div>
</article>