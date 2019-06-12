<header>
    <a id="branding" href="/">
        <img id="kot_logo" src="/img/KOT_cafe/kot_logo.png">
        <h1 id="large-title">K.O.T Cafe</h1>
    </a>
    <button id="navbutton">=</button>
    <nav>
        <a href="/" class="navigbar {{ ($activeMenu=='/') ? 'activenavigation' : '' }}">Home</a>
        <a href="/about" class="navigbar {{ ($activeMenu=='about') ? 'activenavigation' : '' }}">About</a>
        <a href="/dancers" class="navigbar {{ ($activeMenu=='dancers') ? 'activenavigation' : '' }}">Dancers</a>
        <a href="/instructors" class="navigbar {{ ($activeMenu=='instructors') ? 'activenavigation' : '' }}">Instructors</a>
        <a href="/blog" class="navigbar {{ ($activeMenu=='blog') ? 'activenavigation' : '' }}">Blog</a>
    </nav>
</header>