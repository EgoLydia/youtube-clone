<template>

    <Head title="Youtube" />
    <NavLayout>
        <div class=" max-w-2xl  mx-auto p-4">
            <table class=" min-w-full">
                <thead class=" border-b">
                    <tr class=" text-white flex justify-between">
                        <th scope="col" class=" text-sm font-medium px-6 py-4 text-left">
                            Videos
                        </th>
                        <th scope="col" class=" text-sm font-medium px-6 py-4 text-left">
                            Options
                        </th>
                    </tr>

                </thead>
                <tbody>
                    <tr class=" border-b flex justify-between">
                        <td class=" px-6 py-4 w-7/12 text-sm font-medium text-gray-900">
                            <video src="/videos/Seoul.mp4" width="320" controls></video>
                        </td>
                        <td class="relative px-6 py-4 w-5/12 text-sm font-medium text-gray-900">
                            <div class=" text-white font-extrabold mb-4">
                                This is a title
                            </div>
                            <div class="w-full">
                                <button class=" text-white absolute
                                 right-4 text-xs bg-red-600 py-1 px-1 
                                 rounded float-right cursor-pointer font-bold">
                                    Delete
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </NavLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from '@/Layouts/NavLayout.vue';
</script>

<style lang="scss" scoped>

</style>