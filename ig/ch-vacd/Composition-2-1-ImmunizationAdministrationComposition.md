# 2.1 Composition Immunization Administration - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2.1 Composition Immunization Administration**

## Example Composition: 2.1 Composition Immunization Administration

Patient

Name

MonikaWegmueller

Gender

female

Birthday

10.02.1967

Adress

Leidensweg 10

CH - 
9876 
Specimendorf 
 

Contact

home - tel:+41.32.685.12.34

Identifier

urn:oid:2.999.1.2.3.4: 12345678; 

Author

Practitioner

AllzeitBereit
(urn:oid:2.51.1.3: 7601888888884; )

 

Doktorgasse 2

CH - 
8888 
Musterhausen 
 

Organization

Gruppenpraxis CH
(urn:oid:2.51.1.3: 7601888888884; )

 

Doktorgasse 2

CH - 
8888 
Musterhausen 
ZH 

Date

01.06.2021

Immunization Administration

ID

Vaccination Date

Vaccine

Lot

Route

Target

Doc Date

Performer

Identifier

7-1-Immunization

15.09.2017

Boostrix ([637](https://fhir.ch/ig/ch-vacd/CodeSystem-ch-vacd-swissmedic-cs.html#ch-vacd-swissmedic-cs-637))

12-34244

20035000: Intramuscular use

Diphtheria caused by Corynebacterium diphtheriae (disorder)

Tetanus (disorder)

Pertussis (disorder)

15.09.2017

Practitioner

AllzeitBereit
(urn:oid:2.51.1.3: 7601888888884; )

 

Doktorgasse 2

CH - 
8888 
Musterhausen 
 

Organization

Gruppenpraxis CH
(urn:oid:2.51.1.3: 7601888888884; )

 

Doktorgasse 2

CH - 
8888 
Musterhausen 
ZH 

urn:oid:2.999.1.2.3.4: 1829774; 

Comments



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "2-1-ImmunizationAdministrationComposition",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
    ]
  },
  "language" : "en-US",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:5bca53b2-0973-4b91-961e-b1e93474c9c2"
  },
  "status" : "final",
  "type" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "41000179103",
        "display" : "Immunization record"
      }
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "urn:oid:2.16.756.5.30.1.127.3.10.10",
          "code" : "urn:che:epr:ch-vacd:immunization-administration:2022"
        }
      ]
    }
  ],
  "subject" : {
    "reference" : "Patient/3-1-Patient"
  },
  "date" : "2021-06-01T00:00:00+02:00",
  "author" : [
    {
      "reference" : "PractitionerRole/6-1-PractitionerRole"
    }
  ],
  "title" : "Immunization Administration",
  "confidentiality" : "N",
  "_confidentiality" : {
    "extension" : [
      {
        "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-confidentialitycode",
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "17621005",
              "display" : "Normal (qualifier value)"
            }
          ]
        }
      }
    ]
  },
  "custodian" : {
    "reference" : "Organization/5-1-Organization"
  },
  "section" : [
    {
      "id" : "administration",
      "title" : "Immunization Administration",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "11369-6",
            "display" : "Hx of Immunization"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">This is the section containing all immunization entries.</div>"
      },
      "entry" : [
        {
          "reference" : "Immunization/7-1-Immunization"
        }
      ]
    },
    {
      "id" : "originalRepresentation",
      "title" : "Original representation",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "55108-5",
            "display" : "Clinical presentation Document"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">This is the section containing the original representation.</div>"
      },
      "entry" : [
        {
          "reference" : "Binary/1-1-ImmunizationAdministration-Binary"
        }
      ]
    },
    {
      "id" : "Annotation",
      "title" : "Comments",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "48767-8",
            "display" : "Annotation comment Imp"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">This is the section containing all immunization entries.</div>"
      }
    }
  ]
}

```
