<!-- Modal Konfirmasi Aksi -->
<div id="deleteModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-xl max-w-md w-full animate-fade-in">
        <div class="flex items-center mb-4">
            <i class="fas fa-trash-alt text-red-500 text-xl mr-2"></i>
            <h2 id="modalTitle" class="text-xl font-semibold text-gray-800">Konfirmasi</h2>
        </div>
        <p id="deleteModalMessage" class="text-gray-600 mb-6">
            Apakah Anda yakin ingin melanjutkan tindakan ini?
        </p>

        <form id="deleteForm" method="POST" class="flex justify-end space-x-3">
            @csrf
            @method('DELETE')
            <button type="button" onclick="closeModal()" class="px-4 py-2 rounded bg-gray-200 hover:bg-gray-300 text-gray-700">
                Batal
            </button>
            <button type="submit" class="px-4 py-2 rounded bg-red-600 hover:bg-red-700 text-white font-medium flex items-center">
                <i class="fas fa-trash-alt mr-2"></i> Hapus
            </button>
        </form>
    </div>
</div>
