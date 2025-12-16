# 2.3 Composition Vaccination Record - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2.3 Composition Vaccination Record**

## Example Composition: 2.3 Composition Vaccination Record

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

7-2-Immunization

15.09.2013

Boostrix ([637](https://fhir.ch/ig/ch-vacd/CodeSystem-ch-vacd-swissmedic-cs.html#ch-vacd-swissmedic-cs-637))

12-34244

20035000: Intramuscular use

Diphtheria caused by Corynebacterium diphtheriae (disorder)

Tetanus (disorder)

Pertussis (disorder)

15.09.2013

Practitioner

DetlefDemo
(urn:oid:2.51.1.3: 7601000000309; )

 

Hilfgasse 7

CH - 
3456 
Hilferswil 
BE 

Organization

Praxis Demo
(urn:oid:2.51.1.3: 7601000007292; )

 

Hilfgasse 7

CH - 
3456 
Hilferswil 
BE 

urn:oid:2.999.1.2.3.4: 12345; 

7-3-Immunization

12.08.2014

Boostrix ([637](https://fhir.ch/ig/ch-vacd/CodeSystem-ch-vacd-swissmedic-cs.html#ch-vacd-swissmedic-cs-637))

12-34244

20035000: Intramuscular use

Diphtheria caused by Corynebacterium diphtheriae (disorder)

Tetanus (disorder)

Pertussis (disorder)

12.08.2014

Practitioner

DetlefDemo
(urn:oid:2.51.1.3: 7601000000309; )

 

Hilfgasse 7

CH - 
3456 
Hilferswil 
BE 

Organization

Praxis Demo
(urn:oid:2.51.1.3: 7601000007292; )

 

Hilfgasse 7

CH - 
3456 
Hilferswil 
BE 

urn:oid:2.999.1.2.3.4: 23456; 

7-4-Immunization

01.11.2015

Boostrix ([637](https://fhir.ch/ig/ch-vacd/CodeSystem-ch-vacd-swissmedic-cs.html#ch-vacd-swissmedic-cs-637))

12-34244

20035000: Intramuscular use

Diphtheria caused by Corynebacterium diphtheriae (disorder)

Tetanus (disorder)

Pertussis (disorder)

01.11.2015

Practitioner

DetlefDemo
(urn:oid:2.51.1.3: 7601000000309; )

 

Hilfgasse 7

CH - 
3456 
Hilferswil 
BE 

Organization

Praxis Demo
(urn:oid:2.51.1.3: 7601000007292; )

 

Hilfgasse 7

CH - 
3456 
Hilferswil 
BE 

urn:oid:2.999.1.2.3.4: 34567; 

7-5-Immunization

05.03.2016

MMR-II ([268](https://fhir.ch/ig/ch-vacd/CodeSystem-ch-vacd-swissmedic-cs.html#ch-vacd-swissmedic-cs-268))

12-34244

20035000: Intramuscular use

Measles (disorder)

Mumps (disorder)

Rubella (disorder)

05.03.2016

Practitioner

MaxMuster
(urn:oid:2.51.1.3: 7601000000316; )

 

Mustergasse 99

CH - 
9876 
Beispielen 
SG 

Organization

Praxis Muster
(urn:oid:2.51.1.3: 7601000000514; )

 

Mustergasse 99

CH - 
9876 
Beispielen 
SG 

urn:oid:2.999.1.2.3.4: 45678; 

7-6-Immunization

26.02.2012

HBVAXPRO 40 ([545](https://fhir.ch/ig/ch-vacd/CodeSystem-ch-vacd-swissmedic-cs.html#ch-vacd-swissmedic-cs-545))

12-34244

20035000: Intramuscular use

Viral hepatitis type B (disorder)

26.02.2012

Practitioner

MaxMuster
(urn:oid:2.51.1.3: 7601000000316; )

 

Mustergasse 99

CH - 
9876 
Beispielen 
SG 

Organization

Praxis Muster
(urn:oid:2.51.1.3: 7601000000514; )

 

Mustergasse 99

CH - 
9876 
Beispielen 
SG 

urn:oid:2.999.1.2.3.4: 12312; 

Other Relevant Observations

### 8-2-Condition

Code

ANDERE_LEBERERKRANKUNG ([235856003](http://snomed.info/id/235856003))

Documentation Date

01.04.2019

Documenter

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

Identifier

-

### 8-3-Condition

Code

FLEDERMAUSFORSCHER_UND_SCHUETZER ([213006](https://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-exposure-risks-cs.html#ch-vacd-exposure-risks-cs-213006))

Documentation Date

01.04.2009

Documenter

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

Identifier

-

Undergone illnesses for immunization

### 8-4-Condition

Code

Measles (disorder) ([14189004](http://snomed.info/id/14189004))

Date

30.11.1966

Documentation Date

01.04.1999

Documenter

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

Identifier

-

Allergies

### 11-1-AllergyIntolerance

Code

Allergy to egg protein (finding) ([213020009](http://snomed.info/id/213020009))

Documentation Date

11.07.2004

Documenter

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

Identifier

-

### 11-2-AllergyIntolerance

Code

Atopic dermatitis (disorder) ([24079001](http://snomed.info/id/24079001))

Documentation Date

11.07.1996

Documenter

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

Identifier

-

Lab

### 9-1-Observation

Code

Hepatitis B virus surface Ab [Units/volume] in Serum

Result

99 [iU]/L

Interpretation

Positive

Date

..1971

Performer

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

Identifier

-

Comments



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "2-3-VaccinationRecordComposition",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
    ]
  },
  "language" : "en-US",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:00ae697d-3635-4c21-af13-4eaa8018c135"
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
          "code" : "urn:che:epr:ch-vacd:vaccination-record:2022"
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
  "title" : "Vaccination Record",
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
          "reference" : "Immunization/7-2-Immunization"
        },
        {
          "reference" : "Immunization/7-3-Immunization"
        },
        {
          "reference" : "Immunization/7-4-Immunization"
        },
        {
          "reference" : "Immunization/7-5-Immunization"
        },
        {
          "reference" : "Immunization/7-6-Immunization"
        }
      ]
    },
    {
      "id" : "medicalproblems",
      "title" : "Other Relevant Observations",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "11450-4",
            "display" : "Problem list Reported"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">This is the section containing the medical problem entries.</div>"
      },
      "entry" : [
        {
          "reference" : "Condition/8-2-Condition"
        },
        {
          "reference" : "Condition/8-3-Condition"
        }
      ]
    },
    {
      "id" : "sectionIlnessesUndergondeForImmunization1",
      "title" : "Undergone illnesses for immunization",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "11348-0",
            "display" : "Hx of Past illness"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">This is the section containing the undergone illnesses for immunization entries.</div>"
      },
      "entry" : [
        {
          "reference" : "Condition/8-4-Condition"
        }
      ]
    },
    {
      "id" : "allergies",
      "title" : "Allergies",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "48765-2",
            "display" : "Allergies and adverse reactions Document"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">This is the section containing the allergy entries.</div>"
      },
      "entry" : [
        {
          "reference" : "AllergyIntolerance/11-1-AllergyIntolerance"
        },
        {
          "reference" : "AllergyIntolerance/11-2-AllergyIntolerance"
        }
      ]
    },
    {
      "id" : "sectionLab1",
      "title" : "Lab",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "18727-8",
            "display" : "Serology studies (set)"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">This is the section containing the lab entries.</div>"
      },
      "entry" : [
        {
          "reference" : "Observation/9-1-Observation"
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
