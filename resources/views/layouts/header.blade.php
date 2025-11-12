<header class="navbar-edufun">
  <div class="nav-container">
    <a href="{{ route('home') }}" class="logo">EduFun</a>

    <nav class="nav-menu">
      <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>

      <div class="dropdown">
        <span class="nav-link dropdown-label {{ request()->routeIs('category') ? 'active' : '' }}">
          Category <span class="caret">▾</span>
        </span>
        <div class="dropdown-content">
          <a href="{{ route('category', 'Data Science') }}">Data Science</a>
          <a href="{{ route('category', 'Software Engineering') }}">Software Engineering</a>
        </div>
      </div>

      <a href="{{ route('writers') }}" class="nav-link {{ request()->routeIs('writers') ? 'active' : '' }}">Writers</a>
      <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
      <a href="{{ route('popular') }}" class="nav-link {{ request()->routeIs('popular') ? 'active' : '' }}">Popular</a>
    </nav>
  </div>
</header>

<style>
/* ===== BASE LAYOUT ===== */
.navbar-edufun {
  background: #ffffff;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
  position: sticky;
  top: 0;
  z-index: 10;
  font-family: 'Poppins', sans-serif;
}

.nav-container {
  max-width: 1100px;
  margin: 0 auto;
  padding: 14px 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

/* ===== LOGO ===== */
.logo {
  font-weight: 700;
  font-size: 22px;
  color: #000;
  text-decoration: none;
  letter-spacing: 0.5px;
}

/* ===== MENU ===== */
.nav-menu {
  display: flex;
  align-items: center;
  gap: 30px;
}

.nav-link {
  text-decoration: none;
  color: #1c1c1c;
  font-weight: 600;
  position: relative;
  transition: all 0.3s ease;
}

.nav-link:hover {
  color: #5b7ce6;
}

.nav-link.active {
  color: #5b7ce6;
}

.nav-link::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -4px;
  height: 2px;
  width: 0;
  background-color: #5b7ce6;
  transition: width 0.3s ease;
}

.nav-link:hover::after,
.nav-link.active::after {
  width: 100%;
}

/* ===== DROPDOWN CUSTOM ===== */
.dropdown {
  position: relative;
}

.dropdown-label {
  cursor: pointer;
  color: #5b7ce6;
  font-weight: 700;
}

.caret {
  font-size: 12px;
  margin-left: 3px;
}

/* Dropdown panel */
.dropdown-content {
  display: none;
  position: absolute;
  top: 28px;
  left: 0;
  background: #fff;
  border: 2px solid #000;
  border-radius: 4px;
  padding: 10px 12px;
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
  min-width: 210px;
  z-index: 99;
}

.dropdown-content a {
  display: block;
  font-weight: 600;
  text-decoration: none;
  color: #000;
  margin: 6px 0;
  transition: color 0.2s;
}

.dropdown-content a:hover {
  color: #5b7ce6;
  text-decoration: underline;
}

/* Hover trigger */
.dropdown:hover .dropdown-content {
  display: block;
}
</style>
