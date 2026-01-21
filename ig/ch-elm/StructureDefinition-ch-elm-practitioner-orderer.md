# CH ELM Practitioner: Orderer - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Practitioner: Orderer**

## Resource Profile: CH ELM Practitioner: Orderer 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitioner-orderer | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmPractitionerOrderer |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM base profile constrains the Practitioner resource for the orderer. 

**Usages:**

* Use this Profile: [CH ELM Document: Laboratory Report](StructureDefinition-ch-elm-document.md)
* Refer to this Profile: [CH ELM PractitionerRole: Orderer](StructureDefinition-ch-elm-practitionerrole-orderer.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-practitioner-orderer)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-practitioner-orderer.csv), [Excel](StructureDefinition-ch-elm-practitioner-orderer.xlsx), [Schematron](StructureDefinition-ch-elm-practitioner-orderer.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-practitioner-orderer",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Practitioner-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitioner-orderer",
  "version" : "1.13.1",
  "name" : "ChElmPractitionerOrderer",
  "title" : "CH ELM Practitioner: Orderer",
  "status" : "active",
  "date" : "2026-01-21T11:21:00+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "This CH ELM base profile constrains the Practitioner resource for the orderer.",
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
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "eCH",
      "uri" : "http://www.ech.ch/",
      "name" : "eCH-Standards"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Practitioner",
  "baseDefinition" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-practitioner",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Practitioner",
        "path" : "Practitioner",
        "short" : "CH ELM Practitioner: Orderer",
        "constraint" : [
          {
            "key" : "ch-elm-practioner-zsr-check-length",
            "severity" : "warning",
            "human" : "invalid ZSR number, cannot be processed, must be exactly one letter and 6 digits long",
            "expression" : "identifier.where(system='urn:oid:2.16.756.5.30.1.123.100.2.1.1').exists() implies identifier.where(system='urn:oid:2.16.756.5.30.1.123.100.2.1.1').value.matches('^[A-Z][0-9]{6}$').allTrue()",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitioner-orderer"
          },
          {
            "key" : "ch-elm-practioner-zsr-check-digit",
            "severity" : "warning",
            "human" : "invalid ZSR number, cannot be processed, must pass the modulus 26 check - https://confluence.sasis.ch/display/PublicZSR/ZSR+Webservice+FAQ",
            "expression" : "identifier.where(system='urn:oid:2.16.756.5.30.1.123.100.2.1.1').exists() implies identifier.where(system='urn:oid:2.16.756.5.30.1.123.100.2.1.1').value.select(((substring(1,1).toInteger()*6)+(substring(2,1).toInteger()*5)+(substring(3,1).toInteger()*4)+(substring(4,1).toInteger()*3)+(substring(5,1).toInteger()*2)+(substring(6,1).toInteger()))mod(26)=iif(substring(0,1)='A',1,iif(substring(0,1)='B',2,iif(substring(0,1)='C',3,iif(substring(0,1)='D',4,iif(substring(0,1)='E',5,iif(substring(0,1)='F',6,iif(substring(0,1)='G',7,iif(substring(0,1)='H',8,iif(substring(0,1)='I',9,iif(substring(0,1)='J',10,iif(substring(0,1)='K',11,iif(substring(0,1)='L',12,iif(substring(0,1)='M',13,iif(substring(0,1)='N',14,iif(substring(0,1)='O',15,iif(substring(0,1)='P',16,iif(substring(0,1)='Q',17,iif(substring(0,1)='R',18,iif(substring(0,1)='S',19,iif(substring(0,1)='T',20,iif(substring(0,1)='U',21,iif(substring(0,1)='V',22,iif(substring(0,1)='W',23,iif(substring(0,1)='X',24,iif(substring(0,1)='Y',25,iif(substring(0,1)='Z',26,-1))))))))))))))))))))))))))).allTrue()",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitioner-orderer"
          }
        ]
      },
      {
        "id" : "Practitioner.identifier",
        "path" : "Practitioner.identifier",
        "max" : "2",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.identifier:GLN",
        "path" : "Practitioner.identifier",
        "sliceName" : "GLN",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.identifier:ZSR",
        "path" : "Practitioner.identifier",
        "sliceName" : "ZSR",
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.name",
        "path" : "Practitioner.name",
        "max" : "1"
      },
      {
        "id" : "Practitioner.name.family",
        "path" : "Practitioner.name.family",
        "maxLength" : 100,
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.name.family.extension:dataabsentreason",
        "path" : "Practitioner.name.family.extension",
        "sliceName" : "dataabsentreason",
        "min" : 0,
        "max" : "0",
        "type" : [
          {
            "code" : "Extension",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/data-absent-reason"]
          }
        ]
      },
      {
        "id" : "Practitioner.name.given",
        "path" : "Practitioner.name.given",
        "max" : "1",
        "maxLength" : 100,
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.name.given.extension:dataabsentreason",
        "path" : "Practitioner.name.given.extension",
        "sliceName" : "dataabsentreason",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/data-absent-reason"]
          }
        ]
      },
      {
        "id" : "Practitioner.telecom:email",
        "path" : "Practitioner.telecom",
        "sliceName" : "email",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.telecom:email.value",
        "path" : "Practitioner.telecom.value",
        "example" : [
          {
            "label" : "CH ELM",
            "valueString" : "info@domain.ch"
          }
        ],
        "maxLength" : 255
      },
      {
        "id" : "Practitioner.telecom:phone",
        "path" : "Practitioner.telecom",
        "sliceName" : "phone",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.telecom:phone.value",
        "path" : "Practitioner.telecom.value",
        "example" : [
          {
            "label" : "CH ELM",
            "valueString" : "+41 79 999 55 66"
          }
        ],
        "maxLength" : 25
      },
      {
        "id" : "Practitioner.address",
        "path" : "Practitioner.address",
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.address.city",
        "path" : "Practitioner.address.city",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.address.postalCode",
        "path" : "Practitioner.address.postalCode",
        "mustSupport" : true
      }
    ]
  }
}

```
