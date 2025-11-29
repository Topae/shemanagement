<header class="app-header">
    <div class="header-inner">
        <div class="left">
            <span class="app-title">{{ $title ?? 'SHE – PT AICC' }}</span>
        </div>

        <div class="right">
            <!-- User Icon -->
            <div class="user-menu">
                <i class="bi bi-person-circle user-icon"></i>
            </div>
        </div>
    </div>
</header>

<style>
    .app-header {
        position: fixed;
        top: 0;
        left: 260px; /* sejajar sidebar */
        right: 0;
        height: 64px;
        background: #ffffff;
        border-bottom: 1px solid #e5e7eb;
        z-index: 50;
        font-family: 'Poppins', sans-serif;
    }

    .header-inner {
        height: 64px;
        padding: 0 24px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .app-title {
        font-weight: 600;
        font-size: 18px;
        color: #111827;
        letter-spacing: 0.2px;
    }

    .user-menu {
        cursor: pointer;
        display: flex;
        align-items: center;
    }

    .user-icon {
        font-size: 28px;
        color: #4b5563;
        transition: 0.2s ease;
    }

    .user-icon:hover {
        color: #111827;
        transform: scale(1.08);
    }
</style>
