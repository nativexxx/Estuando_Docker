# Enves de usar a imagem no ubunto usa a imagen direta do programa que vai ser executado python. 
FROM python:3.13.0rc2-alpine3.20
# WORKDIR - serve para definir o diretorio da aria trabalho do projeto - qual caminho vai ser passado para o diretorio de trabalho.
WORKDIR /app-com-python3 
# COPY - É responsavel por copiar tudos os arquivos do projeto para dentro do conteiner de image do  Docker 
COPY requirements.txt /app-com-python3 
# RUN fazer a instalação das bibliotecas para dentro do diretorio copiado, passar o comando de instalação + o nome do arquivo txt
RUN pip3 install --no-cache-dir -r requirements.txt
# EXPOSE - Define a rota do Local Host do projeto para ser exibido. 
EXPOSE 8080
# ENV - Adicionar todos as variaves de anbiente que voce especificou no app.py 
ENV LOGOMARCA="https://ww2.inf.ufg.br/sites/default/files/uploads/es/logoesvertical.png"
ENV FOTO="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoqyHIyNIuUBh8TVUD9AuvMQsb2YtXqmnBCg&s"
ENV NOME="Qual o seu nome"
ENV IDADE="Qual a sua idade:"
ENV EMAIL="Digite seu E-mail"
ENV PROFISSAO="Digite sua profissão"
ENV SITE="seu site"
# CMD - Dara o comando de inicialização do projeto quando tiver em execução 
COPY . .
CMD ["python3", "app.py" ] 
