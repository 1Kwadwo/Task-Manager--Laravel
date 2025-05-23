# Laravel Task Manager

A simple Task Management System (like a mini Trello) built with Laravel.  
Users can create tasks, update statuses, and manage tasks securely.

---

## Features

- User authentication and authorization  
- Create, update, delete tasks  
- Tasks organized by status: To Do, In Progress, Done  
- Search and filter tasks  
- Pagination for scalability  
- Flash notifications and progress indicators  
- Role-based access foundation (Admin, User)  
- Responsive and clean UI with Tailwind CSS  

---

## Installation

### Requirements

- PHP >= 8.0  
# Laravel Task Manager

A simple Task Management System (like a mini Trello) built with Laravel.  
This app allows users to create, update, delete, and manage tasks with statuses such as To Do, In Progress, and Done. It features user authentication, role-based access, task search/filtering, pagination, and a responsive UI built with Tailwind CSS.

---

## Features

- User authentication and authorization (Laravel Breeze)  
- Create, update, delete tasks  
- Tasks organized by status: To Do, In Progress, Done  
- Color-coded columns and intuitive status icons  
- Search tasks by title or description  
- Pagination for scalable task lists  
- Flash messages for task actions with auto-dismiss  
- Progress indicator showing completion ratio  
- Task assignment display (shows the task owner)  
- Responsive and accessible UI with Tailwind CSS and Blade templates  
- Role-based access foundation (Admin, User)  

---

## Screenshots

*(Optional: add screenshots of your dashboard here)*

---

## Installation

### Requirements

- PHP >= 8.0  
- Composer  
- Node.js and npm  
- Database: MySQL, SQLite, or any supported by Laravel  

### Setup Steps

1. Clone the repository  
   ```bash
   git clone https://github.com/1Kwadwo/Task-Manager--Laravel.git
   cd Task-Manager--Laravel
Usage
	•	Register a new user or log in.
	•	Create new tasks with title, description, and select a status (To Do, In Progress, Done).
	•	View tasks on the dashboard organized in columns by status with color coding and icons.
	•	Use the search bar above the dashboard to filter tasks by title or description.
	•	Delete tasks you no longer need with confirmation.
	•	Watch the progress bar update as tasks move to Done.
	•	View who each task is assigned to.

⸻

Code Structure Highlights
	•	Controllers: Task management logic (create, update, delete, show tasks) in TaskController.php.
	•	Models: Task and User models define relationships and data handling.
	•	Views: Blade templates with Tailwind CSS for responsive UI, including dashboard.blade.php.
	•	Routes: Web routes defined for dashboard, tasks, and authentication.
	•	Middleware: User authentication and authorization to secure task operations.

⸻

Technologies Used
	•	Laravel Framework (PHP)
	•	Laravel Breeze for authentication scaffolding
	•	Tailwind CSS for styling
	•	Alpine.js for frontend interactivity
	•	SQLite / MySQL for database
	•	Blade templating engine

⸻

Contributing

Contributions, issues, and feature requests are welcome!
Feel free to fork the repo and submit pull requests.

⸻

License

This project is open source under the MIT license.

⸻

Contact

Created by Kwadwo Braimah
Email: Harrisbraimah@icloud.com
GitHub: https://github.com/1Kwadwo
