@extends('frontend.layout.app')

@section('content')
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
    <div class="posts-row">
        @if ($posts->count() > 0)
            <div class="posts_container_grid">
                @foreach ($posts as $post)
                    <div class="posts_test_box" data-index="{{ $loop->index }}"
                        style="background: url('{{ asset('storage/' . $post->image) }}') center/cover no-repeat;">
                        <div class="inner">
                            <a href="#" class="test_click">
                                <div class="flex_this">
                                    <div class="posts_eye_button">
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
    <div id="imageModal" class="postmodal">
        <span class="postclose">&times;</span>
        <button class="postmodal-nav prev" id="prevBtn">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
            </svg>
        </button>
        <button class="postmodal-nav next" id="nextBtn">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
            </svg>
        </button>
        <div class="postmodal-content">
            <div id="modalImage" class="postmodal-image"></div>
        </div>
        <div class="post-image-counter" id="imageCounter"></div>
    </div>

    <script>
        const postmodal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const closeBtn = document.querySelector('.postclose');
        const boxes = document.querySelectorAll('.posts_test_box');
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
            postmodal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            postmodal.style.display = 'none';
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
            if (e.target === postmodal) {
                closeModal();
            }
        });

        document.addEventListener('keydown', function(e) {
            if (postmodal.style.display === 'block') {
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
