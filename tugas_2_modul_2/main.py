def tambah(x, y):
    return x + y

def kurang(x, y):
    return x - y

def kali(x, y):
    return x * y

def bagi(x, y):
    if y != 0:
        return x / y
    else:
        return "Error! Pembagian dengan nol."

def main():
    print("Pilih operasi:")
    print("1. Tambah")
    print("2. Kurang")
    print("3. Kali")
    print("4. Bagi")

    pilihan = input("Masukkan pilihan (1/2/3/4): ")

    if pilihan in ['1', '2', '3', '4']:
        try:
            angka1 = float(input("Masukkan angka pertama: "))
            angka2 = float(input("Masukkan angka kedua: "))
        except ValueError:
            print("Input tidak valid! Harap masukkan angka.")
            return

        if pilihan == '1':
            print(f"Hasil: {tambah(angka1, angka2)}")

        elif pilihan == '2':
            print(f"Hasil: {kurang(angka1, angka2)}")

        elif pilihan == '3':
            print(f"Hasil: {kali(angka1, angka2)}")

        elif pilihan == '4':
            print(f"Hasil: {bagi(angka1, angka2)}")

    else:
        print("Pilihan tidak valid!")

if __name__ == "__main__":
    main()
