<!-- Projects Section -->
<section id="projects" class="relative py-24 bg-[#02040a] overflow-hidden">

  <!-- BACKGROUND EFFECTS -->
  <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[500px] bg-[#b7fe50]/5 blur-[120px] rounded-full pointer-events-none"></div>

  <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

    <!-- HEADER -->
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-8 mb-16">
      <div class="max-w-2xl">
        <span class="inline-flex items-center rounded-full bg-[#b7fe50]/10 px-4 py-1 text-sm font-semibold text-[#b7fe50] border border-[#b7fe50]/20 mb-6">
          Selected Work
        </span>
        <h2 class="text-3xl md:text-5xl font-bold text-white tracking-tight">
          Featured <span class="text-[#b7fe50]">Projects</span>
        </h2>
      </div>

      <!-- TABS -->
      <div class="flex flex-wrap items-center gap-2" id="projectTabs">
        <button class="project-tab active px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 bg-[#b7fe50] text-black shadow-[0_0_15px_rgba(183,254,80,0.3)]" data-target="all">
          All
        </button>
        <button class="project-tab px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 bg-white/5 text-white/70 border border-white/10 hover:bg-white/10 hover:text-white" data-target="wordpress">
          WordPress
        </button>
        <button class="project-tab px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 bg-white/5 text-white/70 border border-white/10 hover:bg-white/10 hover:text-white" data-target="shopify">
          Shopify
        </button>
        <button class="project-tab px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 bg-white/5 text-white/70 border border-white/10 hover:bg-white/10 hover:text-white" data-target="web-design">
          Web Design
        </button>
      </div>
    </div>

    <!-- GRID -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="projectsGrid">

      <!-- PROJECT 1 -->
      <a href="#" class="project-card group block relative rounded-3xl overflow-hidden bg-white/5 border border-white/10 backdrop-blur hover:border-[#b7fe50]/40 transition-all duration-500" data-category="wordpress">
        <div class="relative h-64 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop" alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-[#02040a] via-transparent to-transparent opacity-80"></div>
          <span class="absolute top-4 left-4 inline-flex items-center rounded-full bg-black/50 backdrop-blur-md px-3 py-1 text-xs font-medium text-white border border-white/10">
            WordPress
          </span>
        </div>
        <div class="p-6 relative z-10 -mt-10">
          <h3 class="text-xl font-bold text-white group-hover:text-[#b7fe50] transition-colors">TechFlow Agency</h3>
          <p class="mt-2 text-sm text-white/60 line-clamp-2">A high-performance digital agency website built with custom WordPress blocks and animations.</p>
          <div class="mt-6 flex items-center text-sm font-medium text-[#b7fe50]">
            View Project <span class="ml-2 transition-transform group-hover:translate-x-2">→</span>
          </div>
        </div>
      </a>

      <!-- PROJECT 2 -->
      <a href="#" class="project-card group block relative rounded-3xl overflow-hidden bg-white/5 border border-white/10 backdrop-blur hover:border-[#b7fe50]/40 transition-all duration-500" data-category="shopify">
        <div class="relative h-64 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=2000&auto=format&fit=crop" alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-[#02040a] via-transparent to-transparent opacity-80"></div>
          <span class="absolute top-4 left-4 inline-flex items-center rounded-full bg-black/50 backdrop-blur-md px-3 py-1 text-xs font-medium text-white border border-white/10">
            Shopify
          </span>
        </div>
        <div class="p-6 relative z-10 -mt-10">
          <h3 class="text-xl font-bold text-white group-hover:text-[#b7fe50] transition-colors">Aura Beauty Store</h3>
          <p class="mt-2 text-sm text-white/60 line-clamp-2">A high-converting eCommerce store built on Shopify with headless architecture.</p>
          <div class="mt-6 flex items-center text-sm font-medium text-[#b7fe50]">
            View Project <span class="ml-2 transition-transform group-hover:translate-x-2">→</span>
          </div>
        </div>
      </a>

      <!-- PROJECT 3 -->
      <a href="#" class="project-card group block relative rounded-3xl overflow-hidden bg-white/5 border border-white/10 backdrop-blur hover:border-[#b7fe50]/40 transition-all duration-500" data-category="web-design">
        <div class="relative h-64 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=2055&auto=format&fit=crop" alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-[#02040a] via-transparent to-transparent opacity-80"></div>
          <span class="absolute top-4 left-4 inline-flex items-center rounded-full bg-black/50 backdrop-blur-md px-3 py-1 text-xs font-medium text-white border border-white/10">
            Web Design
          </span>
        </div>
        <div class="p-6 relative z-10 -mt-10">
          <h3 class="text-xl font-bold text-white group-hover:text-[#b7fe50] transition-colors">FinTech Dashboard</h3>
          <p class="mt-2 text-sm text-white/60 line-clamp-2">UI/UX design for a modern financial analytics dashboard.</p>
          <div class="mt-6 flex items-center text-sm font-medium text-[#b7fe50]">
            View Project <span class="ml-2 transition-transform group-hover:translate-x-2">→</span>
          </div>
        </div>
      </a>

      <!-- PROJECT 4 -->
      <a href="#" class="project-card group block relative rounded-3xl overflow-hidden bg-white/5 border border-white/10 backdrop-blur hover:border-[#b7fe50]/40 transition-all duration-500" data-category="wordpress">
        <div class="relative h-64 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1555421689-491a97ff2040?q=80&w=2070&auto=format&fit=crop" alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-[#02040a] via-transparent to-transparent opacity-80"></div>
          <span class="absolute top-4 left-4 inline-flex items-center rounded-full bg-black/50 backdrop-blur-md px-3 py-1 text-xs font-medium text-white border border-white/10">
            WordPress
          </span>
        </div>
        <div class="p-6 relative z-10 -mt-10">
          <h3 class="text-xl font-bold text-white group-hover:text-[#b7fe50] transition-colors">Architechture Hub</h3>
          <p class="mt-2 text-sm text-white/60 line-clamp-2">A portfolio website for an architectural firm with custom post types and filtering.</p>
          <div class="mt-6 flex items-center text-sm font-medium text-[#b7fe50]">
            View Project <span class="ml-2 transition-transform group-hover:translate-x-2">→</span>
          </div>
        </div>
      </a>

    </div>

  </div>
</section>
