<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from '@/Layouts/NavLayout.vue';

</script>

<template>

    <Head title="Youtube" />

    <NavLayout>
        <div class="max-wl-xl mx-auto px-4">
            <div class=" text-white font-extrabold py-10 text-3xl">
                Add Video
            </div>
            <form>
                <div>
                    <div class=" text-gray-200">
                        Title
                    </div>
                    <input type="text" class="
                        form-control
                        block
                        w-[70%]
                        px-5
                        py-1.5
                        text-xl
                        font-normal
                        text-gray-200
                        bg-black
                        placeholder-gray-400
                        bg-clip-padding
                        border
                        border-solid
                        border-gray-600
                        rounded
                        transition
                        ease-in-out
                        m-0
                        border-transparent
                        focus:ring-0
                    " placeholder="My cool video" />
                    <span class=" text-red-500">There is an error</span>
                </div>

                <div class="my-5"></div>
                <div>
                    <div>
                        <div class=" text-gray-200">
                            Thumbnail
                        </div>
                        <input type="file" class="
                        form-control
                                block
                                w-[70%]
                                px-3
                                py-1.5
                                border
                                text-white
                                border-solid
                                border-gray-600
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700
                                focus:border-blue-600
                                focus:outline-none
                    " />
                        <span class=" text-red-500">There is an error</span>
                    </div>
                </div>

                <div class="my-5"></div>
                <div>
                    <div>
                        <div class=" text-gray-200">
                            Video/MP4
                        </div>
                        <input type="file" class="
                        form-control
                                block
                                w-[70%]
                                px-3
                                py-1.5
                                border
                                text-white
                                border-solid
                                border-gray-600
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700
                                focus:border-blue-600
                                focus:outline-none
                    " />
                        <span class=" text-red-500">There is an error</span>
                    </div>
                </div>

                <div class="my-5"></div>

                <div class="">
                    <button type="submit" class=" text-white bg-green-600 rounded 
                     px-4 py-2 font-bold cursor-pointer hover:bg-green-700">
                        Upload Video
                    </button>
                </div>
            </form>
        </div>
    </NavLayout>
</template>
