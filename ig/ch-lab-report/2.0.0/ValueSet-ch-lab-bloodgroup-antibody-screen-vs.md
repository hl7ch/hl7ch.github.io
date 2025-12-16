# CH LAB-Report BloodGroup Antibody Screen Test (LOINC codes) - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report BloodGroup Antibody Screen Test (LOINC codes)**

## ValueSet: CH LAB-Report BloodGroup Antibody Screen Test (LOINC codes) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/ValueSet/ch-lab-bloodgroup-antibody-screen-vs | *Version*:2.0.0 |
| Draft as of 2024-05-10 | *Computable Name*:ChLabBloodGroupAntibodyScreen |
| **Copyright/Legal**: CC0-1.0 | |

 
This value set is used in the ChLabObservationBloodGroup profile. It represents atypical IgG antibodies prior to transfusion or during pregnancy. The screening test is designed specifically to detect IgG antibodies and some IgM antibodies (non ABO) may also be detected. Antibodies detected by the antibody screen should then be identified, and a titer performed if the antibody identified is considered to be clinically significant during pregnancy. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ch-lab-bloodgroup-antibody-screen-vs",
  "url" : "http://fhir.ch/ig/ch-lab-report/ValueSet/ch-lab-bloodgroup-antibody-screen-vs",
  "version" : "2.0.0",
  "name" : "ChLabBloodGroupAntibodyScreen",
  "title" : "CH LAB-Report BloodGroup Antibody Screen Test (LOINC codes)",
  "status" : "draft",
  "experimental" : false,
  "date" : "2024-05-10T10:21:46+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    },
    {
      "name" : "Marcel Hanselmann",
      "telecom" : [
        {
          "system" : "email",
          "value" : "laborprojektgruppe@gmail.com",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "This value set is used in the ChLabObservationBloodGroup profile. It represents\natypical IgG antibodies prior to transfusion or during pregnancy. The screening test is designed\nspecifically to detect IgG antibodies and some IgM antibodies (non ABO) may also be detected.\nAntibodies detected by the antibody screen should then be identified, and a titer performed if\nthe antibody identified is considered to be clinically significant during pregnancy.",
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
  "compose" : {
    "include" : [
      {
        "system" : "http://loinc.org",
        "concept" : [
          {
            "code" : "101678-1",
            "display" : "Blood group antibody screen [Presence] in Blood from Newborn"
          },
          {
            "code" : "14606-8",
            "display" : "Blood group antibody screen [Presence] in Serum or Plasma by Prewarmed"
          },
          {
            "code" : "15343-7",
            "display" : "Blood group antibody screen [Titer] in Serum or Plasma"
          },
          {
            "code" : "18273-3",
            "display" : "Blood group antibody screen [Presence] in Serum or Plasma from Blood product unit"
          },
          {
            "code" : "18274-1",
            "display" : "Blood group antibody screen [Presence] in Serum or Plasma from Donor"
          },
          {
            "code" : "30008-7",
            "display" : "Blood group antibody screen [Titer] in Serum or Plasma by Albumin technique"
          },
          {
            "code" : "32638-9",
            "display" : "Blood group antibody screen [Presence] in Serum or Plasma by Saline method"
          },
          {
            "code" : "46271-3",
            "display" : "Blood group antibody screen [Presence] in Serum or Plasma --after transfusion reaction"
          },
          {
            "code" : "69369-7",
            "display" : "Blood group antibody screen [Presence] in Cord blood"
          },
          {
            "code" : "75263-4",
            "display" : "Blood group antibody screen [Presence] in Serum or Plasma by GEL"
          },
          {
            "code" : "75264-2",
            "display" : "Blood group antibody screen [Presence] in Serum or Plasma by Low ionic strength saline (LISS)"
          },
          {
            "code" : "75265-9",
            "display" : "Blood group antibody screen [Presence] in Serum or Plasma by Polyethylene glycol (PEG) method"
          },
          {
            "code" : "890-4",
            "display" : "Blood group antibody screen [Presence] in Serum or Plasma"
          },
          {
            "code" : "891-2",
            "display" : "Blood group antibody screen.cell I [Presence] in Serum or Plasma"
          },
          {
            "code" : "892-0",
            "display" : "Blood group antibody screen.cell III [Presence] in Serum or Plasma"
          },
          {
            "code" : "893-8",
            "display" : "Blood group antibody screen.autologous [Interpretation] in Serum or Plasma"
          },
          {
            "code" : "894-6",
            "display" : "Blood group antibody screen.cell II [Presence] in Serum or Plasma"
          },
          {
            "code" : "895-3",
            "display" : "Blood group antibody screen.cells I+II+III [Presence] in Serum or Plasma"
          },
          {
            "code" : "896-1",
            "display" : "Blood group antibody screen [Presence] in Serum or Plasma by Cold absorption"
          },
          {
            "code" : "897-9",
            "display" : "Blood group antibody screen [Presence] in Serum or Plasma by Elution"
          },
          {
            "code" : "898-7",
            "display" : "Blood group antibody screen.cell I [Presence] in Serum or Plasma by Prewarmed"
          },
          {
            "code" : "899-5",
            "display" : "Blood group antibody screen.cell II [Presence] in Serum or Plasma by Prewarmed"
          },
          {
            "code" : "900-1",
            "display" : "Blood group antibody screen.cell III [Presence] in Serum or Plasma by Prewarmed"
          },
          {
            "code" : "901-9",
            "display" : "Blood group antibody screen.cells I+II+III [Presence] in Serum or Plasma by Prewarmed"
          },
          {
            "code" : "902-7",
            "display" : "Blood group antibody screen.autologous [Presence] in Serum or Plasma by Prewarmed"
          },
          {
            "code" : "903-5",
            "display" : "Blood group antibody screen [Presence] in Serum or Plasma by RESt absorption"
          },
          {
            "code" : "904-3",
            "display" : "Blood group antibody screen [Presence] in Serum or Plasma by Warm absorption"
          }
        ]
      }
    ]
  }
}

```
