<div>
    <ul x-data="{ openTab: -1 }" class="my-16 max-w-[65ch] xl:text-[1.25rem] lg:text-[1.125rem] -mx-8 md:mx-0">
        {{ accordion }}
            <li>
                <button @click.prevent="openTab = openTab == {{ index }} ? -1 : {{ index }}"
                    :class="{ 'text-primary': openTab === {{ index }} }"
                    class="flex items-center w-full gap-4 py-4 pl-2 pr-6 m-0 text-xl text-left border-t appearance-none md:py-6 xl:py-8 md:text-2xl border-slate-300 hover:text-primary font-title">
                    <span>
                        <svg :class="{ 'text-primary rotate-90': openTab === {{ index }}, 'text-slate-500': openTab !== {{ index }} }"
                            class="w-6 h-6 transition-all duration-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                    <span>{{ title }}</span>
                </button>
                <div x-show="openTab === {{ index }}" :class="{ '': openTab === {{ index }} }"
                    class="pb-8 pl-12 mb-8">
                    {{ partial:content_simple }}
                </div>
            </li>
        {{ /accordion }}
    </ul>
</div>