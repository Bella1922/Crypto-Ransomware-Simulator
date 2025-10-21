import time
import os
import threading

def countdown_timer(hours, minutes, seconds):
    total_seconds = hours * 3600 + minutes * 60 + seconds

    while total_seconds:
        os.system('cls' if os.name == 'nt' else 'clear')
        hrs, rem = divmod(total_seconds, 3600)
        mins, secs = divmod(rem, 60)
        print(f"The time remaining is {hrs:02}:{mins:02}:{secs:02}")
        time.sleep(1)
        total_seconds -= 1

    os.system('cls' if os.name == 'nt' else 'clear')
    print("***************")
    print("Timer ended!\a")
    print(f"Lasted for {hours * 3600 + minutes * 60 + seconds} seconds")
    print("***************")

# Start countdown from 72 hours in a separate thread
timer_thread = threading.Thread(target=countdown_timer, args=(72, 0, 0))
timer_thread.start()