import React from "react";
import ReactDOM from "react-dom";

const Relatorio = () => {
  const [ocorrencias, setOcorrencias] = useState([]);

  // Carrega as ocorrências do banco de dados
  useEffect(() => {
    fetch("/api/consultar-ocorrencias")
      .then((response) => response.json())
      .then((data) => {
        setOcorrencias(data.fichas);
      });
  }, []);

  // Exibe as ocorrências
  return (
    <ul>
      {ocorrencias.map((ocorrencia) => (
        <li key={ocorrencia.id}>
          {ocorrencia.descricao}
        </li>
      ))}
    </ul>
  );
};

ReactDOM.render(<Relatorio />, document.querySelector("#app"));
// Carrega as ocorrências do banco de dados
fetch("/api/consultar-ocorrencias")
  .then((response) => response.json())
  .then((data) => {
    setOcorrencias(data.fichas);
  });

// Exibe as ocorrências
return (
  <ul>
    {ocorrencias.map((ocorrencia) => (
      <li key={ocorrencia.id}>
        {ocorrencia.descricao}
      </li>
    ))}
  </ul>
);