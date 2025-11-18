<x-layouts.template :title="__('test')">

<section class="bg-gray-50">
    <!-- Main Container -->
    <div class="flex h-screen overflow-hidden">
        
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-lg">
            <div class="p-6">
                <div class="flex items-center space-x-3 mb-8">
                    <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-check-double text-white"></i>
                    </div>
                    <h1 class="text-xl font-bold text-gray-800">TaskMaster</h1>
                </div>
                
                <!-- Navigation Menu -->
                <nav class="space-y-2">
                    <a href="#" class="flex items-center space-x-3 text-gray-700 p-3 rounded-lg hover:bg-blue-50 bg-blue-50 transition-colors">
                        <i class="fas fa-inbox text-blue-600"></i>
                        <span class="font-medium">All Tasks</span>
                        <span class="ml-auto bg-blue-100 text-blue-600 text-xs px-2 py-1 rounded-full">24</span>
                    </a>
                    
                    <a href="#" class="flex items-center space-x-3 text-gray-600 p-3 rounded-lg hover:bg-gray-100 transition-colors">
                        <i class="fas fa-calendar-day text-gray-500"></i>
                        <span>Today</span>
                        <span class="ml-auto bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded-full">8</span>
                    </a>
                    
                    <a href="#" class="flex items-center space-x-3 text-gray-600 p-3 rounded-lg hover:bg-gray-100 transition-colors">
                        <i class="fas fa-calendar-week text-gray-500"></i>
                        <span>This Week</span>
                        <span class="ml-auto bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded-full">15</span>
                    </a>
                    
                    <a href="#" class="flex items-center space-x-3 text-gray-600 p-3 rounded-lg hover:bg-gray-100 transition-colors">
                        <i class="fas fa-star text-gray-500"></i>
                        <span>Important</span>
                        <span class="ml-auto bg-yellow-100 text-yellow-700 text-xs px-2 py-1 rounded-full">5</span>
                    </a>
                    
                    <div class="pt-4 mt-4 border-t border-gray-200">
                        <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Projects</h3>
                        <a href="#" class="flex items-center space-x-3 text-gray-600 p-3 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                            <span>Personal</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 text-gray-600 p-3 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            <span>Work</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 text-gray-600 p-3 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                            <span>Shopping</span>
                        </a>
                    </div>
                </nav>
            </div>
            
            <!-- Add New Project Button -->
            <div class="p-6 border-t border-gray-200">
                <button class="w-full flex items-center justify-center space-x-2 text-gray-600 hover:text-blue-600 transition-colors">
                    <i class="fas fa-plus"></i>
                    <span>New Project</span>
                </button>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            
            <!-- Header with Search -->
            <header class="bg-white shadow-sm border-b border-gray-200">
                <div class="flex items-center justify-between p-6">
                    <div class="flex-1 max-w-2xl">
                        <div class="relative">
                            <input type="text" placeholder="Search tasks..." 
                                class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4 ml-6">
                        <button class="text-gray-600 hover:text-gray-800 transition-colors">
                            <i class="fas fa-bell text-xl"></i>
                        </button>
                        <div class="w-10 h-10 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white font-semibold">
                            JD
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Main Task Area -->
            <main class="flex-1 overflow-y-auto p-6">
                
                <!-- Page Title and Add Task Button -->
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">All Tasks</h2>
                        <p class="text-gray-600 mt-1">You have 24 tasks for today</p>
                    </div>
                    <button onclick="openAddTaskModal()" 
                        class="bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-3 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all shadow-lg hover:shadow-xl flex items-center space-x-2">
                        <i class="fas fa-plus"></i>
                        <span>Add Task</span>
                    </button>
                </div>
                
                <!-- Goals for Today Section -->
                <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl p-6 mb-6 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-semibold mb-2">🎯 Today's Goal</h3>
                            <p class="text-blue-100">Complete 5 high-priority tasks and review project documentation</p>
                        </div>
                        <div class="text-right">
                            <div class="text-3xl font-bold">65%</div>
                            <div class="text-blue-100 text-sm">Progress</div>
                        </div>
                    </div>
                    <div class="mt-4 bg-white/20 rounded-full h-2">
                        <div class="bg-white rounded-full h-2 w-[65%]"></div>
                    </div>
                </div>
                
                <!-- Filter Tabs -->
                <div class="flex items-center space-x-4 mb-6 border-b border-gray-200">
                    <button class="pb-3 px-1 border-b-2 border-blue-500 text-blue-600 font-medium">
                        All Tasks
                    </button>
                    <button class="pb-3 px-1 text-gray-500 hover:text-gray-700 transition-colors">
                        In Progress
                        <span class="ml-2 bg-yellow-100 text-yellow-700 text-xs px-2 py-0.5 rounded-full">12</span>
                    </button>
                    <button class="pb-3 px-1 text-gray-500 hover:text-gray-700 transition-colors">
                        Completed
                        <span class="ml-2 bg-green-100 text-green-700 text-xs px-2 py-0.5 rounded-full">8</span>
                    </button>
                    <button class="pb-3 px-1 text-gray-500 hover:text-gray-700 transition-colors">
                        Pending
                        <span class="ml-2 bg-gray-100 text-gray-700 text-xs px-2 py-0.5 rounded-full">4</span>
                    </button>
                </div>
                
                <!-- Task List -->
                <div class="space-y-3">
                    
                    <!-- Task Item - In Progress -->
                    <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow p-4 border-l-4 border-yellow-400">
                        <div class="flex items-center">
                            <input type="checkbox" class="w-5 h-5 text-blue-600 rounded focus:ring-blue-500">
                            <div class="ml-4 flex-1">
                                <div class="flex items-center justify-between">
                                    <h4 class="text-gray-800 font-medium">Design new landing page mockup</h4>
                                    <div class="flex items-center space-x-2">
                                        <span class="bg-yellow-100 text-yellow-700 text-xs px-2 py-1 rounded-full">In Progress</span>
                                        <button class="text-gray-400 hover:text-gray-600">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </div>
                                </div>
                                <p class="text-gray-500 text-sm mt-1">Create responsive mockups for the new marketing campaign</p>
                                <div class="flex items-center space-x-4 mt-3">
                                    <span class="text-xs text-gray-500">
                                        <i class="far fa-calendar-alt mr-1"></i> Due: Today
                                    </span>
                                    <span class="text-xs text-gray-500">
                                        <i class="far fa-clock mr-1"></i> 2 hours left
                                    </span>
                                    <span class="inline-flex items-center">
                                        <span class="bg-purple-100 text-purple-700 text-xs px-2 py-1 rounded">Design</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Task Item - Completed -->
                    <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow p-4 border-l-4 border-green-400 opacity-75">
                        <div class="flex items-center">
                            <input type="checkbox" checked class="w-5 h-5 text-green-600 rounded focus:ring-green-500">
                            <div class="ml-4 flex-1">
                                <div class="flex items-center justify-between">
                                    <h4 class="text-gray-600 font-medium line-through">Fix navigation menu responsiveness</h4>
                                    <div class="flex items-center space-x-2">
                                        <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">Completed</span>
                                        <button class="text-gray-400 hover:text-gray-600">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </div>
                                </div>
                                <p class="text-gray-400 text-sm mt-1 line-through">Update CSS for mobile menu and test on different devices</p>
                                <div class="flex items-center space-x-4 mt-3">
                                    <span class="text-xs text-gray-500">
                                        <i class="far fa-check-circle mr-1 text-green-500"></i> Completed 2 hours ago
                                    </span>
                                    <span class="inline-flex items-center">
                                        <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded">Development</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Task Item - High Priority -->
                    <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow p-4 border-l-4 border-red-400">
                        <div class="flex items-center">
                            <input type="checkbox" class="w-5 h-5 text-blue-600 rounded focus:ring-blue-500">
                            <div class="ml-4 flex-1">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2">
                                        <h4 class="text-gray-800 font-medium">Client meeting preparation</h4>
                                        <i class="fas fa-star text-yellow-400"></i>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full">High Priority</span>
                                        <button class="text-gray-400 hover:text-gray-600">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </div>
                                </div>
                                <p class="text-gray-500 text-sm mt-1">Prepare presentation slides and gather project metrics</p>
                                <div class="flex items-center space-x-4 mt-3">
                                    <span class="text-xs text-gray-500">
                                        <i class="far fa-calendar-alt mr-1"></i> Due: Today, 3:00 PM
                                    </span>
                                    <span class="text-xs text-red-500">
                                        <i class="far fa-clock mr-1"></i> 1 hour left
                                    </span>
                                    <span class="inline-flex items-center">
                                        <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded">Meeting</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Task Item - Normal -->
                    <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow p-4 border-l-4 border-blue-400">
                        <div class="flex items-center">
                            <input type="checkbox" class="w-5 h-5 text-blue-600 rounded focus:ring-blue-500">
                            <div class="ml-4 flex-1">
                                <div class="flex items-center justify-between">
                                    <h4 class="text-gray-800 font-medium">Review pull requests</h4>
                                    <div class="flex items-center space-x-2">
                                        <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full">Todo</span>
                                        <button class="text-gray-400 hover:text-gray-600">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </div>
                                </div>
                                <p class="text-gray-500 text-sm mt-1">Check and approve pending pull requests from team members</p>
                                <div class="flex items-center space-x-4 mt-3">
                                    <span class="text-xs text-gray-500">
                                        <i class="far fa-calendar-alt mr-1"></i> Due: Tomorrow
                                    </span>
                                    <span class="inline-flex items-center">
                                        <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">Code Review</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Task Item - In Progress with Progress Bar -->
                    <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow p-4 border-l-4 border-yellow-400">
                        <div class="flex items-center">
                            <input type="checkbox" class="w-5 h-5 text-blue-600 rounded focus:ring-blue-500">
                            <div class="ml-4 flex-1">
                                <div class="flex items-center justify-between">
                                    <h4 class="text-gray-800 font-medium">Write API documentation</h4>
                                    <div class="flex items-center space-x-2">
                                        <span class="bg-yellow-100 text-yellow-700 text-xs px-2 py-1 rounded-full">In Progress</span>
                                        <button class="text-gray-400 hover:text-gray-600">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </div>
                                </div>
                                <p class="text-gray-500 text-sm mt-1">Document all endpoints for the new REST API</p>
                                <div class="mt-2">
                                    <div class="flex items-center justify-between text-xs text-gray-500 mb-1">
                                        <span>Progress</span>
                                        <span>40%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5">
                                        <div class="bg-yellow-400 h-1.5 rounded-full" style="width: 40%"></div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4 mt-3">
                                    <span class="text-xs text-gray-500">
                                        <i class="far fa-calendar-alt mr-1"></i> Due: This Week
                                    </span>
                                    <span class="inline-flex items-center">
                                        <span class="bg-purple-100 text-purple-700 text-xs px-2 py-1 rounded">Documentation</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </main>
        </div>
    </div>
    
    <!-- Add Task Modal (Hidden by default) -->
    <div id="addTaskModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50">
        <div class="bg-white rounded-xl p-6 w-full max-w-md">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-bold text-gray-800">Add New Task</h3>
                <button onclick="closeAddTaskModal()" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Task Title</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter task title">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="3" placeholder="Enter task description"></textarea>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Due Date</label>
                        <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Priority</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option>Low</option>
                            <option>Medium</option>
                            <option>High</option>
                        </select>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Project</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Personal</option>
                        <option>Work</option>
                        <option>Shopping</option>
                    </select>
                </div>
                
                <div class="flex space-x-3 pt-4">
                    <button type="button" onclick="closeAddTaskModal()" class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="flex-1 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        Add Task
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        function openAddTaskModal() {
            document.getElementById('addTaskModal').classList.remove('hidden');
        }
        
        function closeAddTaskModal() {
            document.getElementById('addTaskModal').classList.add('hidden');
        }
        
        // Close modal when clicking outside
        document.getElementById('addTaskModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeAddTaskModal();
            }
        });
    </script>
</section>

</x-layouts.template>