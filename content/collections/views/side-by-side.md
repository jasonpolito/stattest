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
                        class="w-full block overflow-hidden lg:w-2/3 xl:w-3/5 lg:h-auto min-h-[12rem] sm:min-h-[18rem] md:min-h-[24rem] sm:h-full min-h">
                        <div
                            class="absolute transition-all duration-700 hover:grayscale hover:scale-[1.1] top-0 left-0 w-full h-full">
                            <img src="{{ img:url }}" alt="{{ img:alt }}"
                                style="aspect-ratio: {{ img:width }} / {{ img:height }}; object-position: {{ img:focus_css }};"
                                class="absolute object-cover h-full min-w-full ">
                        </div>
                    </a>
                {{ else }}
                    <div
                        class="w-full overflow-hidden lg:w-2/3 xl:w-3/5 lg:h-auto min-h-[12rem] sm:min-h-[18rem] md:min-h-[24rem] sm:h-full min-h">
                        <div class="absolute top-0 left-0 w-full h-full">
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
                    {{ btns }}
                        <x-btn url="{href}" size="{size.value}" style="{style.value}">{{ text }}</x-btn>
                    {{ /btns }}
                </div>
            </div>
        </x-container>
    </x-section>
  mode: htmlmixed
updated_by: 2d2d6685-b06b-4c36-ac61-bb3b0bd2b14f
updated_at: 1690384826
handle: side-by-side
---
