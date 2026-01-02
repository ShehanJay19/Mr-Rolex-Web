@extends('layouts.app')

@section('content')
<section class="max-w-[700px] mx-auto px-6 py-16">
    <h1 class="text-4xl font-extrabold mb-10">My Profile</h1>
    <div class="bg-canvas border border-border rounded-xl shadow-lg p-8 flex flex-col md:flex-row gap-8 mb-12">
        <div class="flex-shrink-0 flex flex-col items-center md:items-start">
            <div class="w-24 h-24 rounded-full bg-gray-200 flex items-center justify-center text-3xl font-bold text-gray-500 mb-4">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A9 9 0 1112 21a9 9 0 01-6.879-3.196z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <span class="font-bold text-lg">Jane Doe</span>
            <span class="text-gray-500 text-sm mb-2">jane.doe@email.com</span>
            <span class="text-gray-400 text-xs">Member since 2024</span>
        </div>
        <div class="flex-1 flex flex-col gap-4">
            <div>
                <span class="block text-muted text-xs mb-1">Address</span>
                <span class="block font-semibold">123 Fashion Ave, New York, NY</span>
            </div>
            <div>
                <span class="block text-muted text-xs mb-1">Phone</span>
                <span class="block font-semibold">+1 555 123 4567</span>
            </div>
            <button class="mt-4 px-6 py-2 border border-border rounded-full font-semibold hover:bg-accent hover:text-white transition w-fit">Edit Profile</button>
        </div>
    </div>
    <div class="bg-canvas border border-border rounded-xl shadow-lg p-8">
        <h2 class="text-lg font-bold mb-6">Order History</h2>
        <table class="w-full text-left">
            <thead class="bg-gray-50 border-b border-border">
                <tr>
                    <th class="p-4">Order #</th>
                    <th class="p-4">Date</th>
                    <th class="p-4">Total</th>
                    <th class="p-4">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-border hover:bg-gray-50 transition">
                    <td class="p-4 font-semibold">#123456</td>
                    <td class="p-4">Jan 2, 2026</td>
                    <td class="p-4">$257</td>
                    <td class="p-4"><span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-bold">Delivered</span></td>
                </tr>
                <tr class="border-b border-border hover:bg-gray-50 transition">
                    <td class="p-4 font-semibold">#123455</td>
                    <td class="p-4">Dec 20, 2025</td>
                    <td class="p-4">$139</td>
                    <td class="p-4"><span class="px-3 py-1 rounded-full bg-gray-100 text-gray-700 text-xs font-bold">Processing</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection
