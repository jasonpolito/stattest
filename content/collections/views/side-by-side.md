---
id: 22dd1154-3ecd-4557-892a-766c536db7a2
blueprint: view
title: 'Side by side'
markup:
  code: |-
    <x-section class="side-by-side">
        <x-container>
            <div
                class="flex {{ !image_on_left ?= 'flex-row-reverse' }} flex-wrap items-center gap-8 -mx-4 lg:gap-12 sm:mx-0 lg:flex-nowrap">
                {{ if href }}
                    <a href="{{ href }}"
                        class="w-full block group overflow-hidden rounded lg:w-2/3 xl:w-3/5 lg:h-auto min-h-[12rem] sm:min-h-[18rem] md:min-h-[24rem] sm:h-full min-h">
                        <div
                            class="absolute hover:blur-sm transition-all duration-1000 hover:grayscale hover:scale-[1.1] top-0 left-0 w-full h-full">
                            <img src="{{ img:url }}" alt="{{ img:alt }}"
                                style="aspect-ratio: {{ img:width }} / {{ img:height }}; object-position: {{ img:focus_css }};"
                                class="absolute object-cover h-full min-w-full ">
                        </div>
                        <div
                            class="transition-all duration-700 rounded opacity-0 pointer-events-none fill-parent bg-primary mix-blend-multiply group-hover:opacity-100">
                        </div>
                        <div
                            class="flex items-center justify-center text-lg text-white transition-all duration-700 translate-y-4 opacity-0 pointer-events-none group-hover:opacity-100 fill-parent group-hover:translate-y-0">
                            <span class="flex items-center gap-2">
                                <span>{{ title | strip_tags }}</span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                    </svg>
                                </span>
                            </span>
                        </div>
                    </a>
                {{ else }}
                    <div
                        class="w-full overflow-hidden rounded lg:w-2/3 xl:w-3/5 lg:h-auto min-h-[12rem] sm:min-h-[18rem] md:min-h-[24rem] sm:h-full min-h">
                        <div class="fill-parent">
                            <img src="{{ img:url }}" alt="{{ img:alt }}"
                                style="aspect-ratio: {{ img:width }} / {{ img:height }}; object-position: {{ img:focus_css }};"
                                class="absolute object-cover h-full min-w-full ">
                        </div>
                    </div>
                {{ /if }}
                <div class="w-full px-4 sm:px-0 lg:py-24 lg:w-1/3 xl:w-2/5">
                    <h3 class="mb-4 text-2xl font-bold sm:mb-6 md:text-3xl lg:text-4xl">
                        {{ if href }}
                            <a href="{{ href }}">
                                {{ title }}
                            </a>
                        {{ else }}
                            {{ title }}
                        {{ /if }}
                    </h3>
                    <div class="text-gray-500 sm:text-xl">{{ content }}</div>
                    {{ if btns }}
                        <div class="pt-8"></div>
                    {{ /if }}
                    {{ btns }}
                        <x-btn url="{href}" size="{size.value}" style="{style.value}">{{ text }}</x-btn>
                    {{ /btns }}
                </div>
            </div>
        </x-container>
    </x-section>
  mode: htmlmixed
updated_by: 2d2d6685-b06b-4c36-ac61-bb3b0bd2b14f
updated_at: 1690396790
handle: side-by-side
---