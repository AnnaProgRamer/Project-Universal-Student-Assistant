FROM postgres
WORKDIR /ushFolder
ENV POSTGRES_DB=USH_bot
ENV POSTGRES_USER=USH_user
ENV POSTGRES_PASSWORD=EgL!.[.jqJMaj7j
COPY init.sql /docker-entrypoint-initdb.d/
VOLUME ["/var/lib/postgresql/data"]
EXPOSE 5432

# Команда для сборки образа: t
# Строение команды: docker build -t <название образа> <путь к папке с файлами Dockerfile и init.sql> 

# Команда для запуска контейнера: docker run --name ushcontainer -d -p 5433:5432 -v "/home/ups_db/db_data:/var/lib/postgresql/data" ushpostgres
# Строение команды: docker run --name <имя контейнера> -d -p <порт на котором будет открыт доступ к БД>:5432 -v "<путь до папки где будет храниться БД, она должна быть пустой>:/var/lib/postgresql/data" <название образа который нужно запустить>
