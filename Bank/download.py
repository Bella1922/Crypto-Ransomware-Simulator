import os
import sys

# Simulate file encryption
def encrypt_file(file_path):
    # Placeholder for encryption logic
    print(f"Encrypting {file_path}...")
    # Simulate encryption process
    os.rename(file_path, file_path + ".encrypted")
    print("File encrypted successfully.")

if __name__ == "__main__":
    # Assuming the file to encrypt is passed as an argument
    if len(sys.argv) != 2:
        print("Usage: python download.py <file_path>")
        sys.exit(1)

    file_path = sys.argv[1]
    encrypt_file(file_path)