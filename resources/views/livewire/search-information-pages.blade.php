<div>
    <div class="flex flex-wrap -mx-8">
        <div class="w-full px-8 lg:w-1/3">
            <div>
                <label class="flex items-center w-full mb-4 border-b group border-slate-400">
                    <input type="text" placeholder="Search"
                        class="w-full py-4 leading-7 bg-transparent border-none">
                    <a href="#"
                        class="flex items-center gap-2 px-4 py-4 -mx-px text-sm leading-6 text-slate-400 group-focus-within:text-primary hocus:text-primary">
                        <svg class="w-6 h-6 left-px" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                            </path>
                        </svg> </a>
                </label>
            </div>
        </div>
        <div class="px-8 lg:w-2/3">
            <div class="flex flex-wrap -mx-3">
                {{ children = {nav:collection:informational_pages max_depth="1" :from="uri"} }}
                {{ children group_by="tag" }}
                    {{ groups }}
                        <div class="w-full px-3 mb-8 md:w-1/2">
                            <h3 class="py-4 mb-4 font-serif text-xl border-b border-slate-400">
                                {{ group ?? 'Uncategorized' }}
                            </h3>
                            <div
                                class="prose prose-a:font-normal prose-a:text-primary prose-a:no-underline prose-a:decoration-1 hover:prose-a:underline">
                                <ul>
                                    {{ items }}
                                        <li><a href="{{ url }}" class="hover:underline">{{ title }}</a></li>
                                    {{ /items }}
                                </ul>
                            </div>
                        </div>
                    {{ /groups }}
                {{ /children }}
            </div>
        </div>
    </div>
</div>
