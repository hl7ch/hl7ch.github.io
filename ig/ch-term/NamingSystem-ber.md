# BER - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BER**

## NamingSystem: BER 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/NamingSystem/ber | *Version*:3.3.0 |
| Active as of 2019-10-24 | *Computable Name*:BER |
| **Copyright/Legal**: CC0-1.0 | |

 
The Business and Enterprise Register (BER) contains all enterprises and business in private and public law which are domiciled and exercise an economic activity in Switzerland. French: (REE) Registre des entreprises et des établissements. German: (BUR) Betriebs- und Unternehmensregister, Italian: (RIS) Registro delle imprese e degli stabilimenti. 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "ber",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://fhir.ch/ig/ch-term/NamingSystem/ber"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "3.3.0"
    }
  ],
  "name" : "BER",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2019-10-24",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "responsible" : "Swiss Federal Statistical Office (FSO)",
  "description" : "The Business and Enterprise Register (BER) contains all enterprises and business in private and public law which are domiciled and exercise an economic activity in Switzerland.                       French: (REE) Registre des entreprises et des établissements.                        German: (BUR) Betriebs- und Unternehmensregister,                       Italian: (RIS) Registro delle imprese e degli stabilimenti.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "uniqueId" : [
    {
      "type" : "oid",
      "value" : "2.16.756.5.45",
      "comment" : "This is the official identifier"
    }
  ]
}

```
