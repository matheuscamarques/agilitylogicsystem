using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Aglog
{
    #region Cadastro_cliente
    public class Cadastro_cliente
    {
        #region Member Variables
        protected unknown _cpf;
        protected string _email;
        protected int _telefone;
        protected string _nome;
        #endregion
        #region Constructors
        public Cadastro_cliente() { }
        public Cadastro_cliente(string email, int telefone, string nome)
        {
            this._email=email;
            this._telefone=telefone;
            this._nome=nome;
        }
        #endregion
        #region Public Properties
        public virtual unknown Cpf
        {
            get {return _cpf;}
            set {_cpf=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual int Telefone
        {
            get {return _telefone;}
            set {_telefone=value;}
        }
        public virtual string Nome
        {
            get {return _nome;}
            set {_nome=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Aglog
{
    #region Endereco_cliente
    public class Endereco_cliente
    {
        #region Member Variables
        protected string _logradouro;
        protected string _numero;
        protected string _complemento;
        protected string _bairro;
        protected string _cidade;
        protected string _estado;
        protected int _cep;
        protected int _cod_endereco;
        protected unknown _cpf;
        #endregion
        #region Constructors
        public Endereco_cliente() { }
        public Endereco_cliente(string logradouro, string numero, string complemento, string bairro, string cidade, string estado, int cep, unknown cpf)
        {
            this._logradouro=logradouro;
            this._numero=numero;
            this._complemento=complemento;
            this._bairro=bairro;
            this._cidade=cidade;
            this._estado=estado;
            this._cep=cep;
            this._cpf=cpf;
        }
        #endregion
        #region Public Properties
        public virtual string Logradouro
        {
            get {return _logradouro;}
            set {_logradouro=value;}
        }
        public virtual string Numero
        {
            get {return _numero;}
            set {_numero=value;}
        }
        public virtual string Complemento
        {
            get {return _complemento;}
            set {_complemento=value;}
        }
        public virtual string Bairro
        {
            get {return _bairro;}
            set {_bairro=value;}
        }
        public virtual string Cidade
        {
            get {return _cidade;}
            set {_cidade=value;}
        }
        public virtual string Estado
        {
            get {return _estado;}
            set {_estado=value;}
        }
        public virtual int Cep
        {
            get {return _cep;}
            set {_cep=value;}
        }
        public virtual int Cod_endereco
        {
            get {return _cod_endereco;}
            set {_cod_endereco=value;}
        }
        public virtual unknown Cpf
        {
            get {return _cpf;}
            set {_cpf=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Aglog
{
    #region Lote
    public class Lote
    {
        #region Member Variables
        protected int _cod_lote;
        protected int _cod_usuario;
        protected unknown _data_entrega;
        protected int _status;
        #endregion
        #region Constructors
        public Lote() { }
        public Lote(int cod_usuario, unknown data_entrega, int status)
        {
            this._cod_usuario=cod_usuario;
            this._data_entrega=data_entrega;
            this._status=status;
        }
        #endregion
        #region Public Properties
        public virtual int Cod_lote
        {
            get {return _cod_lote;}
            set {_cod_lote=value;}
        }
        public virtual int Cod_usuario
        {
            get {return _cod_usuario;}
            set {_cod_usuario=value;}
        }
        public virtual unknown Data_entrega
        {
            get {return _data_entrega;}
            set {_data_entrega=value;}
        }
        public virtual int Status
        {
            get {return _status;}
            set {_status=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Aglog
{
    #region Nivel
    public class Nivel
    {
        #region Member Variables
        protected int _cod_nivel;
        protected string _nome;
        #endregion
        #region Constructors
        public Nivel() { }
        public Nivel(string nome)
        {
            this._nome=nome;
        }
        #endregion
        #region Public Properties
        public virtual int Cod_nivel
        {
            get {return _cod_nivel;}
            set {_cod_nivel=value;}
        }
        public virtual string Nome
        {
            get {return _nome;}
            set {_nome=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Aglog
{
    #region Objeto
    public class Objeto
    {
        #region Member Variables
        protected int _cod_objeto;
        protected unknown _tamanho;
        protected unknown _distancia;
        protected unknown _preco;
        protected int _cod_taxa;
        protected unknown _cpf_origem;
        protected unknown _cpf_destino;
        protected unknown _peso;
        protected int _status;
        #endregion
        #region Constructors
        public Objeto() { }
        public Objeto(unknown tamanho, unknown distancia, unknown preco, int cod_taxa, unknown cpf_origem, unknown cpf_destino, unknown peso, int status)
        {
            this._tamanho=tamanho;
            this._distancia=distancia;
            this._preco=preco;
            this._cod_taxa=cod_taxa;
            this._cpf_origem=cpf_origem;
            this._cpf_destino=cpf_destino;
            this._peso=peso;
            this._status=status;
        }
        #endregion
        #region Public Properties
        public virtual int Cod_objeto
        {
            get {return _cod_objeto;}
            set {_cod_objeto=value;}
        }
        public virtual unknown Tamanho
        {
            get {return _tamanho;}
            set {_tamanho=value;}
        }
        public virtual unknown Distancia
        {
            get {return _distancia;}
            set {_distancia=value;}
        }
        public virtual unknown Preco
        {
            get {return _preco;}
            set {_preco=value;}
        }
        public virtual int Cod_taxa
        {
            get {return _cod_taxa;}
            set {_cod_taxa=value;}
        }
        public virtual unknown Cpf_origem
        {
            get {return _cpf_origem;}
            set {_cpf_origem=value;}
        }
        public virtual unknown Cpf_destino
        {
            get {return _cpf_destino;}
            set {_cpf_destino=value;}
        }
        public virtual unknown Peso
        {
            get {return _peso;}
            set {_peso=value;}
        }
        public virtual int Status
        {
            get {return _status;}
            set {_status=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Aglog
{
    #region Objeto_lote
    public class Objeto_lote
    {
        #region Member Variables
        protected int _cod_lote_objeto;
        protected int _cod_objeto;
        protected int _cod_lote;
        protected int _status;
        #endregion
        #region Constructors
        public Objeto_lote() { }
        public Objeto_lote(int cod_objeto, int cod_lote, int status)
        {
            this._cod_objeto=cod_objeto;
            this._cod_lote=cod_lote;
            this._status=status;
        }
        #endregion
        #region Public Properties
        public virtual int Cod_lote_objeto
        {
            get {return _cod_lote_objeto;}
            set {_cod_lote_objeto=value;}
        }
        public virtual int Cod_objeto
        {
            get {return _cod_objeto;}
            set {_cod_objeto=value;}
        }
        public virtual int Cod_lote
        {
            get {return _cod_lote;}
            set {_cod_lote=value;}
        }
        public virtual int Status
        {
            get {return _status;}
            set {_status=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Aglog
{
    #region Passos
    public class Passos
    {
        #region Member Variables
        protected int _cod_passos;
        protected int _cod_objeto;
        protected unknown _cep;
        protected unknown _hora;
        protected unknown _data;
        protected string _status;
        #endregion
        #region Constructors
        public Passos() { }
        public Passos(int cod_objeto, unknown cep, unknown hora, unknown data, string status)
        {
            this._cod_objeto=cod_objeto;
            this._cep=cep;
            this._hora=hora;
            this._data=data;
            this._status=status;
        }
        #endregion
        #region Public Properties
        public virtual int Cod_passos
        {
            get {return _cod_passos;}
            set {_cod_passos=value;}
        }
        public virtual int Cod_objeto
        {
            get {return _cod_objeto;}
            set {_cod_objeto=value;}
        }
        public virtual unknown Cep
        {
            get {return _cep;}
            set {_cep=value;}
        }
        public virtual unknown Hora
        {
            get {return _hora;}
            set {_hora=value;}
        }
        public virtual unknown Data
        {
            get {return _data;}
            set {_data=value;}
        }
        public virtual string Status
        {
            get {return _status;}
            set {_status=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Aglog
{
    #region Taxas
    public class Taxas
    {
        #region Member Variables
        protected int _cod_taxa;
        protected unknown _taxa;
        #endregion
        #region Constructors
        public Taxas() { }
        public Taxas(unknown taxa)
        {
            this._taxa=taxa;
        }
        #endregion
        #region Public Properties
        public virtual int Cod_taxa
        {
            get {return _cod_taxa;}
            set {_cod_taxa=value;}
        }
        public virtual unknown Taxa
        {
            get {return _taxa;}
            set {_taxa=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Aglog
{
    #region Usuario
    public class Usuario
    {
        #region Member Variables
        protected int _cod_usuario;
        protected string _nome;
        protected string _email;
        protected string _senha;
        protected int _cod_nivel;
        #endregion
        #region Constructors
        public Usuario() { }
        public Usuario(string nome, string email, string senha, int cod_nivel)
        {
            this._nome=nome;
            this._email=email;
            this._senha=senha;
            this._cod_nivel=cod_nivel;
        }
        #endregion
        #region Public Properties
        public virtual int Cod_usuario
        {
            get {return _cod_usuario;}
            set {_cod_usuario=value;}
        }
        public virtual string Nome
        {
            get {return _nome;}
            set {_nome=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Senha
        {
            get {return _senha;}
            set {_senha=value;}
        }
        public virtual int Cod_nivel
        {
            get {return _cod_nivel;}
            set {_cod_nivel=value;}
        }
        #endregion
    }
    #endregion
}