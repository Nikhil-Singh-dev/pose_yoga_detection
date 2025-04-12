import tkinter as tk
from tkinter import PhotoImage

# Function to update the avatar's pose
def show_pose(pose):
    pose_label.config(text=f"Pose: {pose}")  # Display the pose name
    
    # Start the avatar animation based on the selected pose
    animate_avatar(pose)

def animate_avatar(pose):
    # Change the avatar image based on the selected pose
    if pose == "Tadasana":
        avatar_action_label.config(text="Avatar in Tadasana pose")  
        avatar_image = PhotoImage(file="tadasana.png")  # Load image for Tadasana pose (you can replace this image)
        canvas.itemconfig(avatar, image=avatar_image)  # Update avatar image
        canvas.image = avatar_image  # Keep a reference to avoid garbage collection
        # Move avatar to represent Tadasana pose
        canvas.coords(avatar, 150, 100)  
    elif pose == "Downward Dog":
        avatar_action_label.config(text="Avatar in Downward Dog pose")
        avatar_image = PhotoImage(file="aiyoga1.jpg")  # Load image for Downward Dog pose
        canvas.itemconfig(avatar, image=avatar_image)  # Update avatar image
        canvas.image = avatar_image  # Keep a reference to avoid garbage collection
        # Adjusting position for Downward Dog pose
        canvas.coords(avatar, 130, 150)
    elif pose == "Warrior":
        avatar_action_label.config(text="Avatar in Warrior pose")
        avatar_image = PhotoImage(file="aiyoga1.jpg")  # Load image for Warrior pose (you can replace this image)
        canvas.itemconfig(avatar, image=avatar_image)  # Update avatar image
        canvas.image = avatar_image  # Keep a reference to avoid garbage collection
        # Adjusting position for Warrior pose
        canvas.coords(avatar, 150, 200)

def update_avatar(pose):
    # After animation time, update the avatar with a simple pose action
    avatar_action_label.config(text=f"Avatar is now performing {pose}.")

# Create the main window
window = tk.Tk()
window.title("Yoga Avatar")

# Set the window size
window.geometry("500x500")

# Create a label to display the selected pose name
pose_label = tk.Label(window, text="Pose: None", font=("Arial", 14))
pose_label.grid(row=0, column=0, columnspan=3)

# Create a canvas to represent the avatar (as a simple 2D image for now)
canvas = tk.Canvas(window, width=400, height=300)
canvas.grid(row=1, column=0, columnspan=3)

# Represent the avatar as a simple 2D image (starting with Downward Dog pose)
avatar = canvas.create_image(250, 150, anchor=tk.CENTER)  # Center avatar in the canvas

# Create a label to show avatar action
avatar_action_label = tk.Label(window, text="Avatar is ready!", font=("Arial", 12), width=40, height=2)
avatar_action_label.grid(row=2, column=0, columnspan=3)

# Create buttons for each yoga pose
button_tadasana = tk.Button(window, text="Tadasana", font=("Arial", 14), command=lambda: show_pose("Tadasana"))
button_tadasana.grid(row=3, column=0)

button_downward_dog = tk.Button(window, text="Downward Dog", font=("Arial", 14), command=lambda: show_pose("Downward Dog"))
button_downward_dog.grid(row=3, column=1)

button_warrior = tk.Button(window, text="Warrior", font=("Arial", 14), command=lambda: show_pose("Warrior"))
button_warrior.grid(row=3, column=2)

# Start the Tkinter event loop
window.mainloop()
