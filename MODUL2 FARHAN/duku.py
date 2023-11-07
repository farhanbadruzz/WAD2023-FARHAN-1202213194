import calendar 

#Membuat list kosong
januari = ['7. rapat','9. gaming','5. jalan']
februari = []
maret = []
april = []
mei = []
juni = []
juli = []
agustus = []
september = []
oktober = []
november = []
desember = ['7. busi','3. lokal']

def menu():
    print('===>>> REMEMBER ME! <<<===')
    print('1. Menambahkan agenda')
    print('2. Melihat catatan')
    print('3. Menghapus agenda')
    print('0. Exit')

def tambah():
    month = int(input('Bulan yang dipilih(*Menggunakan nomor): '))
    print(calendar.month(2022, month))
    #membuat match case sebagai percabangan pemilihan bulan
    match month:
        case 1:
            tambah = (input('Masukkan agenda(ex:5. deadline tugas alpro): '))
            januari.append(tambah)
            print(f'Agenda {tambah} berhasil ditambahkan')
        case 2:
            tambah = (input('Masukkan agenda: '))
            februari.append(tambah)
            print(f'Agenda {tambah} berhasil ditambahkan')
        case 3:
            tambah = (input('Masukkan agenda: '))
            maret.append(tambah)
            print(f'Agenda {tambah} berhasil ditambahkan')
        case 4:
            tambah = (input('Masukkan agenda: '))
            april.append(tambah)
            print(f'Agenda {tambah} berhasil ditambahkan')
        case 5:
            tambah = (input('Masukkan agenda: '))
            mei.append(tambah)
            print(f'Agenda {tambah} berhasil ditambahkan')
        case 6:
            tambah = (input('Masukkan agenda: '))
            juni.append(tambah)
            print(f'Agenda {tambah} berhasil ditambahkan')
        case 7:
            tambah = (input('Masukkan agenda: '))
            juli.append(tambah)
            print(f'Agenda {tambah} berhasil ditambahkan')
        case 8:
            tambah = (input('Masukkan agenda: '))
            agustus.append(tambah)
            print(f'Agenda {tambah} berhasil ditambahkan')
        case 9:
            tambah = (input('Masukkan agenda: '))
            september.append(tambah)
            print(f'Agenda {tambah} berhasil ditambahkan')
        case 10:
            tambah = (input('Masukkan agenda: '))
            oktober.append(tambah)
            print(f'Agenda {tambah} berhasil ditambahkan')
        case 11:
            tambah = (input('Masukkan agenda: '))
            november.append(tambah)
            print(f'Agenda {tambah} berhasil ditambahkan')
        case 12:
            tambah = (input('Masukkan agenda: '))
            desember.append(tambah)
            print(f'Agenda {tambah} berhasil ditambahkan')
def tampil():
    bulan = int(input('Masukkan bulan: '))
    match bulan:
        case 1:
            januari.sort()
            for i in range(0, len(januari)):
                print(f'{januari[i]}')
        case 2:
            februari.sort()
            for i in range(0, len(februari)):
                print(f'{februari[i]}')
        case 3:
            maret.sort()
            for i in range(0, len(maret)):
                print(f'{maret[i]}')
        case 4:
            april.sort()
            for i in range(0, len(april)):
                print(f'{april[i]}')
        case 5:
            mei.sort()
            for i in range(0, len(mei)):
                print(f'{mei[i]}')
        case 6:
            juni.sort()
            for i in range(0, len(juni)):
                print(f'{juni[i]}')
        case 7:
            juli.sort()
            for i in range(0, len(juli)):
                print(f'{juli[i]}')
        case 8:
            agustus.sort()
            for i in range(0, len(agustus)):
                print(f'{agustus[i]}')
        case 9:
            september.sort()
            for i in range(0, len(september)):
                print(f'{september[i]}')
        case 10:
            oktober.sort()
            for i in range(0, len(oktober)):
                print(f'{oktober[i]}')
        case 11:
            november.sort()
            for i in range(0, len(november)):
                print(f'{november[i]}')
        case 12:
            desember.sort()
            for i in range(0, len(desember)):
                print(f'{desember[i]}')

def hapus():
    bulan = int(input('Masukkan bulan: '))
    match bulan:
        case 1:
            for i in range(0, len(januari)):
                print(f'{januari[i]}')
            hapus = input('Masukkan agenda yang akan dihapus: ')
            januari.remove(hapus)
            print(f'Agenda {hapus} berhasil dihapuskan')
        case 2:
            for i in range(0, len(februari)):
                print(f'{februari[i]}')
            hapus = input('Masukkan agenda yang akan dihapus: ')
            februari.remove(hapus)
            print(f'Agenda {hapus} berhasil dihapuskan')
        case 3:
            for i in range(0, len(maret)):
                print(f'{maret[i]}')
            hapus = input('Masukkan agenda yang akan dihapus: ')
            maret.remove(hapus)
            print(f'Agenda {hapus} berhasil dihapuskan')
        case 4:
            for i in range(0, len(april)):
                print(f'{april[i]}')
            hapus = input('Masukkan agenda yang akan dihapus: ')
            april.remove(hapus)
            print(f'Agenda {hapus} berhasil dihapuskan')
        case 5:
            for i in range(0, len(mei)):
                print(f'{mei[i]}')
            hapus = input('Masukkan agenda yang akan dihapus: ')
            mei.remove(hapus)
            print(f'Agenda {hapus} berhasil dihapuskan')
        case 6:
            for i in range(0, len(juni)):
                print(f'{juni[i]}')
            hapus = input('Masukkan agenda yang akan dihapus: ')
            juni.remove(hapus)
            print(f'Agenda {hapus} berhasil dihapuskan')
        case 7:
            for i in range(0, len(juli)):
                print(f'{juli[i]}')
            hapus = input('Masukkan agenda yang akan dihapus: ')
            juli.remove(hapus)
            print(f'Agenda {hapus} berhasil dihapuskan')
        case 8:
            for i in range(0, len(agustus)):
                print(f'{agustus[i]}')
            hapus = input('Masukkan agenda yang akan dihapus: ')
            agustus.remove(hapus)
            print(f'Agenda {hapus} berhasil dihapuskan')
        case 9:
            for i in range(0, len(september)):
                print(f'{september[i]}')
            hapus = input('Masukkan agenda yang akan dihapus: ')
            september.remove(hapus)
            print(f'Agenda {hapus} berhasil dihapuskan')
        case 10:
            for i in range(0, len(oktober)):
                print(f'{oktober[i]}')
            hapus = input('Masukkan agenda yang akan dihapus: ')
            oktober.remove(hapus)
            print(f'Agenda {hapus} berhasil dihapuskan')
        case 11:
            for i in range(0, len(november)):
                print(f'{november[i]}')
            hapus = input('Masukkan agenda yang akan dihapus: ')
            november.remove(hapus)
            print(f'Agenda {hapus} berhasil dihapuskan')
        case 12:
            for i in range(0, len(desember)):
                print(f'{desember[i]}')
            hapus = input('Masukkan agenda yang akan dihapus: ')
            desember.remove(hapus)
            print(f'Agenda {hapus} berhasil dihapuskan')





        
menu()
#user menerima perintah
perintah = int(input('\nMasukkan menu yang Anda inginkan: '))
while perintah != 0:
    if perintah == 1:
        tambah()
    elif perintah == 2:
        tampil()
    elif perintah == 3:
        hapus()
    else:
        print('Menu yang Anda masukkan tidak tersedia, silahkan pilih menu lain')
    
    menu()
    #mengulang kembali/memasukkan kembali perintah
    perintah = int(input('\nMasukkan menu yang Anda inginkan: '))

print('Terima kasih telah menggunakan program kami\n') #akhir dari program