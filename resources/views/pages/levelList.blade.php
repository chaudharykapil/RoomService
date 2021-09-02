@extends('..layout')
  @section('content')
  @if(Session::has('message'))
      <script>
        alert('{{Session::get("message")}}')
      </script>
    @endif
      <!-- component -->
      <div class="bg-white pb-4 px-4 rounded-md w-full">
        <div class="overflow-x-auto mt-6">
          <table class="table-auto border-collapse w-full">
            <thead>
              <tr
                class="rounded-lg text-sm font-medium text-gray-700 text-left"
                style="font-size: 0.9674rem"
              >
                <th
                  class="px-4 py-2 bg-gray-200"
                  style="background-color: #f8f8f8"
                >
                  #
                </th>
                <th
                  class="px-4 py-2 bg-gray-200"
                  style="background-color: #f8f8f8"
                >
                  Level ID
                </th>
                <th
                  class="px-4 py-2 bg-gray-200"
                  style="background-color: #f8f8f8"
                >
                  Building Name
                </th>
                <th
                  class="px-4 py-2 bg-gray-200"
                  style="background-color: #f8f8f8"
                >
                  Building Level
                </th>
                <th
                  class="px-4 py-2 bg-gray-200"
                  style="background-color: #f8f8f8"
                >
                  Status
                </th>
                <th
                  class="px-4 py-2 bg-gray-200"
                  style="background-color: #f8f8f8"
                >
                  Action
                </th>
              </tr>
            </thead>
            <tbody class="text-sm font-normal text-gray-700">
              <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                <td class="px-4 py-4">1</td>
                <td class="px-4 py-4">Block_11_1</td>
                <td class="px-4 py-4">Block 11</td>
                <td class="px-4 py-4">1</td>
                <td class="px-4 py-4">
                  <div>
                    <div
                      class="
                        relative
                        inline-block
                        w-10
                        mr-2
                        align-middle
                        select-none
                        transition
                        duration-200
                        ease-in
                      "
                    >
                      <input
                        type="checkbox"
                        name="toggle"
                        id="toggle"
                        class="
                          toggle-checkbox
                          absolute
                          block
                          w-6
                          h-6
                          rounded-full
                          bg-white
                          border-4
                          appearance-none
                          cursor-pointer
                        "
                      />
                      <label
                        for="toggle"
                        class="
                          toggle-label
                          block
                          overflow-hidden
                          h-6
                          rounded-full
                          bg-gray-300
                          cursor-pointer
                        "
                      ></label>
                    </div>
                    <label for="toggle" class="text-lg text-gray-700"
                      >Active</label
                    >
                  </div>
                </td>
                <td class="px-4 py-4"><button>✏️</button></td>
              </tr>
              <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                <td class="px-4 py-4">1</td>
                <td class="px-4 py-4">Block_11_1</td>
                <td class="px-4 py-4">Block 11</td>
                <td class="px-4 py-4">1</td>
                <td class="px-4 py-4">
                  <div>
                    <div
                      class="
                        relative
                        inline-block
                        w-10
                        mr-2
                        align-middle
                        select-none
                        transition
                        duration-200
                        ease-in
                      "
                    >
                      <input
                        type="checkbox"
                        name="toggle"
                        id="toggle"
                        class="
                          toggle-checkbox
                          absolute
                          block
                          w-6
                          h-6
                          rounded-full
                          bg-white
                          border-4
                          appearance-none
                          cursor-pointer
                        "
                      />
                      <label
                        for="toggle"
                        class="
                          toggle-label
                          block
                          overflow-hidden
                          h-6
                          rounded-full
                          bg-gray-300
                          cursor-pointer
                        "
                      ></label>
                    </div>
                    <label for="toggle" class="text-lg text-gray-700"
                      >Active</label
                    >
                  </div>
                </td>
                <td class="px-4 py-4"><button>✏️</button></td>
              </tr>
              <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                <td class="px-4 py-4">1</td>
                <td class="px-4 py-4">Block_11_1</td>
                <td class="px-4 py-4">Block 11</td>
                <td class="px-4 py-4">1</td>
                <td class="px-4 py-4">
                  <div>
                    <div
                      class="
                        relative
                        inline-block
                        w-10
                        mr-2
                        align-middle
                        select-none
                        transition
                        duration-200
                        ease-in
                      "
                    >
                      <input
                        type="checkbox"
                        name="toggle"
                        id="toggle"
                        class="
                          toggle-checkbox
                          absolute
                          block
                          w-6
                          h-6
                          rounded-full
                          bg-white
                          border-4
                          appearance-none
                          cursor-pointer
                        "
                      />
                      <label
                        for="toggle"
                        class="
                          toggle-label
                          block
                          overflow-hidden
                          h-6
                          rounded-full
                          bg-gray-300
                          cursor-pointer
                        "
                      ></label>
                    </div>
                    <label for="toggle" class="text-lg text-gray-700"
                      >Active</label
                    >
                  </div>
                </td>
                <td class="px-4 py-4"><button>✏️</button></td>
              </tr>
              <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                <td class="px-4 py-4">1</td>
                <td class="px-4 py-4">Block_11_1</td>
                <td class="px-4 py-4">Block 11</td>
                <td class="px-4 py-4">1</td>
                <td class="px-4 py-4">
                  <div>
                    <div
                      class="
                        relative
                        inline-block
                        w-10
                        mr-2
                        align-middle
                        select-none
                        transition
                        duration-200
                        ease-in
                      "
                    >
                      <input
                        type="checkbox"
                        name="toggle"
                        id="toggle"
                        class="
                          toggle-checkbox
                          absolute
                          block
                          w-6
                          h-6
                          rounded-full
                          bg-white
                          border-4
                          appearance-none
                          cursor-pointer
                        "
                      />
                      <label
                        for="toggle"
                        class="
                          toggle-label
                          block
                          overflow-hidden
                          h-6
                          rounded-full
                          bg-gray-300
                          cursor-pointer
                        "
                      ></label>
                    </div>
                    <label for="toggle" class="text-lg text-gray-700"
                      >Active</label
                    >
                  </div>
                </td>
                <td class="px-4 py-4"><button>✏️</button></td>
              </tr>
              <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                <td class="px-4 py-4">1</td>
                <td class="px-4 py-4">Block_11_1</td>
                <td class="px-4 py-4">Block 11</td>
                <td class="px-4 py-4">1</td>
                <td class="px-4 py-4">
                  <div>
                    <div
                      class="
                        relative
                        inline-block
                        w-10
                        mr-2
                        align-middle
                        select-none
                        transition
                        duration-200
                        ease-in
                      "
                    >
                      <input
                        type="checkbox"
                        name="toggle"
                        id="toggle"
                        class="
                          toggle-checkbox
                          absolute
                          block
                          w-6
                          h-6
                          rounded-full
                          bg-white
                          border-4
                          appearance-none
                          cursor-pointer
                        "
                      />
                      <label
                        for="toggle"
                        class="
                          toggle-label
                          block
                          overflow-hidden
                          h-6
                          rounded-full
                          bg-gray-300
                          cursor-pointer
                        "
                      ></label>
                    </div>
                    <label for="toggle" class="text-lg text-gray-700"
                      >Active</label
                    >
                  </div>
                </td>
                <td class="px-4 py-4"><button>✏️</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      @endsection
