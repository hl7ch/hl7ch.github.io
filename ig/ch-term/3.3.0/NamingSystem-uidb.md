# UIDB - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UIDB**

## NamingSystem: UIDB 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/NamingSystem/uidb | *Version*:3.3.0 |
| Active as of 2019-10-24 | *Computable Name*:UIDB |
| **Copyright/Legal**: CC0-1.0 | |

 
Unique IDentification Business (UIDB) number (in French, numéro d'IDentification suisse des Enterprises (IDE)) (in German, Schweizer Unternehmens-IDentifikationsnummer (UID)) (in Italian, numero d'IDentificazione svizzero delle Imprese (IDI)) Organizations Covered By System: All Companies/organizations registered in the public Swiss Registers such as the Swiss Register of Commerce, the Value Added Tax (VAT) register, the Social security agencies Registers, Cantons registers, etc., and publish in the UID Register. 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "uidb",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://fhir.ch/ig/ch-term/NamingSystem/uidb"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "3.3.0"
    }
  ],
  "name" : "UIDB",
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
  "description" : "Unique IDentification Business (UIDB) number (in French, numéro d'IDentification suisse des Enterprises (IDE)) (in German, Schweizer Unternehmens-IDentifikationsnummer (UID)) (in Italian, numero d'IDentificazione svizzero delle Imprese (IDI))   Organizations Covered By System: All Companies/organizations registered in the public Swiss Registers such as the Swiss Register of Commerce, the Value Added Tax (VAT) register, the Social security agencies Registers, Cantons registers, etc., and publish in the UID Register.",
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
      "value" : "2.16.756.5.35",
      "comment" : "This is the official identifier"
    }
  ]
}

```
