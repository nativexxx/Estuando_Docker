FROM python:3.13.0rc2-alpine3.20
WORKDIR /app
COPY . /app
RUN pip3 install --no-cache-dir -r requirements.txt
EXPOSE 8080
ENV LOGOMARCA="https://www.udesc.br/arquivos/ceavi/imagens/Eso_logo_horizontal_cor_fit_16935009781717_2143.png"
ENV FOTO="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoqyHIyNIuUBh8TVUD9AuvMQsb2YtXqmnBCg&s"
ENV NOME="Yuri"
ENV IDADE="108"
ENV EMAIL="Yuri@hotmail.com"
ENV PROFISSAO="Atleta"
ENV SITE="www.yuriparaolimpiadas.com.br"
CMD ["python3", "app.py"]