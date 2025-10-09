@extends('frontend.layout.app')

@section('content')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .row {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .container_grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            animation: fadeInUp 0.6s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .test_box {
            height: 320px;
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            animation: slideIn 0.5s ease backwards;
        }

        .test_box:nth-child(1) {
            animation-delay: 0.1s;
        }

        .test_box:nth-child(2) {
            animation-delay: 0.2s;
        }

        .test_box:nth-child(3) {
            animation-delay: 0.3s;
        }

        .test_box:nth-child(4) {
            animation-delay: 0.4s;
        }

        .test_box:nth-child(5) {
            animation-delay: 0.5s;
        }

        .test_box:nth-child(6) {
            animation-delay: 0.6s;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(40px) scale(0.95);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .test_box:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        .test_box .inner {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .test_box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: inherit;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: 0;
        }

        .test_box .test_click {
            display: block;
            width: 100%;
            height: 100%;
            text-decoration: none;
            position: relative;
            z-index: 1;
        }

        .test_box .flex_this {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 0);
            transition: all 0.4s ease;
        }

        .test_box:hover .flex_this {
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(2px);
        }

        .eye_button {
            width: 90px;
            height: 90px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transform: scale(0.3) rotate(-180deg);
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            cursor: pointer;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        .test_box:hover .eye_button {
            opacity: 1;
            transform: scale(1) rotate(0deg);
        }

        .eye_button:hover {
            background: #f8f9fa;
            transform: scale(1.1) rotate(0deg);
        }

        .eye_button svg {
            width: 45px;
            height: 45px;
            fill: #333;
            transition: fill 0.3s ease;
        }

        .eye_button:hover svg {
            fill: #667eea;
        }

        /* No Posts Message */
        .no-posts-container {
            text-align: center;
            padding: 80px 20px;
            animation: fadeInUp 0.6s ease;
        }

        .no-posts-icon {
            width: 120px;
            height: 120px;
            margin: 0 auto 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0.9;
        }

        .no-posts-icon svg {
            width: 60px;
            height: 60px;
            fill: white;
        }

        .no-posts-title {
            font-size: 28px;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }

        .no-posts-text {
            font-size: 16px;
            color: #666;
            max-width: 500px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.95);
            animation: fadeIn 0.3s ease;
            overflow: auto;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .modal-content {
            position: relative;
            margin: 40px auto;
            padding: 20px;
            width: 95%;
            max-width: 1100px;
            min-height: calc(100vh - 80px);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-image {
            width: 100%;
            height: 80vh;
            border-radius: 12px;
            background-size: contain !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            animation: zoomIn 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .close {
            position: fixed;
            top: 20px;
            right: 30px;
            color: #fff;
            font-size: 50px;
            font-weight: 300;
            cursor: pointer;
            transition: all 0.3s;
            z-index: 10000;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            backdrop-filter: blur(10px);
            line-height: 1;
        }

        .close:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: rotate(90deg);
        }

        /* Navigation arrows */
        .modal-nav {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            color: white;
            border: none;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10000;
        }

        .modal-nav:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-50%) scale(1.1);
        }

        .modal-nav.prev {
            left: 20px;
        }

        .modal-nav.next {
            right: 20px;
        }

        .modal-nav svg {
            width: 30px;
            height: 30px;
            fill: white;
        }

        .modal-nav:disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }

        .modal-nav:disabled:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-50%) scale(1);
        }

        /* Image counter */
        .image-counter {
            position: fixed;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            color: white;
            padding: 12px 24px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 500;
            z-index: 10000;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container_grid {
                grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
                gap: 15px;
            }

            .test_box {
                height: 280px;
            }

            .eye_button {
                width: 70px;
                height: 70px;
            }

            .eye_button svg {
                width: 35px;
                height: 35px;
            }

            .modal-nav {
                width: 50px;
                height: 50px;
            }

            .modal-nav.prev {
                left: 10px;
            }

            .modal-nav.next {
                right: 10px;
            }

            .close {
                top: 15px;
                right: 15px;
                font-size: 40px;
            }

            .no-posts-icon {
                width: 100px;
                height: 100px;
            }

            .no-posts-title {
                font-size: 24px;
            }
        }

        @media (max-width: 480px) {
            .container_grid {
                grid-template-columns: 1fr;
            }

            .test_box {
                height: 250px;
            }
        }
    </style>

    <!-- Breadcrumb Section -->
    <section id="tz-breadcrumb" class="tz-breadcrumb-sec position-relative"
        data-background="{{ asset('assets/img/bg/bread-bg.jpg') }}">
        <div class="container">
            <div class="tz-breadcrumb-content headline text-center ul-li">
                <h2 class="bread_heading">Portfolio Posts</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Posts</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <div class="row">
        @if ($posts->count() > 0)
            <div class="container_grid">
                @foreach ($posts as $post)
                    <div class="test_box" data-index="{{ $loop->index }}"
                        style="background: url('{{ asset('storage/' . $post->image) }}') center/cover no-repeat;">
                        <div class="inner">
                            <a href="#" class="test_click">
                                <div class="flex_this">
                                    <div class="eye_button">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 5C7 5 2.73 8.11 1 12.5 2.73 16.89 7 20 12 20s9.27-3.11 11-7.5C21.27 8.11 17 5 12 5zm0 12.5c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="no-posts-container">
                <div class="no-posts-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zm-5.04-6.71l-2.75 3.54-1.96-2.36L6.5 17h11l-3.54-4.71z" />
                    </svg>
                </div>
                <h2 class="no-posts-title">No Portfolio Items Found</h2>
                <p class="no-posts-text">
                    There are currently no portfolio items to display. Please check back later or contact the administrator
                    to add new content.
                </p>
            </div>
        @endif
    </div>

    <!-- Modal -->
    <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <button class="modal-nav prev" id="prevBtn">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
            </svg>
        </button>
        <button class="modal-nav next" id="nextBtn">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
            </svg>
        </button>
        <div class="modal-content">
            <div id="modalImage" class="modal-image"></div>
        </div>
        <div class="image-counter" id="imageCounter"></div>
    </div>

    <script>
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const closeBtn = document.querySelector('.close');
        const boxes = document.querySelectorAll('.test_box');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const imageCounter = document.getElementById('imageCounter');

        let currentIndex = 0;
        const totalImages = boxes.length;

        function updateModal(index) {
            const box = boxes[index];
            const bgImage = window.getComputedStyle(box).backgroundImage;

            // Set the background image properly
            modalImage.style.backgroundImage = bgImage;

            // Update counter
            imageCounter.textContent = `${index + 1} / ${totalImages}`;

            // Update navigation buttons
            prevBtn.disabled = index === 0;
            nextBtn.disabled = index === totalImages - 1;
        }

        function openModal(index) {
            currentIndex = index;
            updateModal(currentIndex);
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        boxes.forEach((box, index) => {
            const link = box.querySelector('.test_click');
            link.addEventListener('click', function(e) {
                e.preventDefault();
                openModal(index);
            });
        });

        closeBtn.addEventListener('click', closeModal);

        prevBtn.addEventListener('click', function() {
            if (currentIndex > 0) {
                currentIndex--;
                updateModal(currentIndex);
            }
        });

        nextBtn.addEventListener('click', function() {
            if (currentIndex < totalImages - 1) {
                currentIndex++;
                updateModal(currentIndex);
            }
        });

        window.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal();
            }
        });

        document.addEventListener('keydown', function(e) {
            if (modal.style.display === 'block') {
                if (e.key === 'Escape') {
                    closeModal();
                } else if (e.key === 'ArrowLeft' && currentIndex > 0) {
                    currentIndex--;
                    updateModal(currentIndex);
                } else if (e.key === 'ArrowRight' && currentIndex < totalImages - 1) {
                    currentIndex++;
                    updateModal(currentIndex);
                }
            }
        });
    </script>
@endsection
