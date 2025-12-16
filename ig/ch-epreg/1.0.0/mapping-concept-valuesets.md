# Mapping Concept Value Sets - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* **Mapping Concept Value Sets**

## Mapping Concept Value Sets

The concept for the exchange format of the electronic pregnancy passport ([de](https://www.e-health-suisse.ch/upload/documents/eSchwangerschaftspass_Konzept_de.pdf), [fr](https://www.e-health-suisse.ch/upload/documents/eDossiergrossesse_Concept_fr.pdf)) defines specific value sets for various data elements. These value sets, which contain the values in both German and French, are included in the concept document.

When representing this data in an FHIR document, the goal is to maintain compatibility with (Swiss) base concepts, such as those defined in CH Core or CH Term, whenever possible. To achieve this, the following mappings describe how the defined values from the concept paper are represented as coded values in FHIR resources (see also [FHIR Terminology](https://hl7.org/fhir/R4/terminology-module.html)), making use of existing value sets/terminologies where available.

### Parent

**Profile:** [CH EPREG RelatedPerson: Parent](StructureDefinition-ch-epreg-relatedperson-parent.md) 
 **Example:** [Biological Father](RelatedPerson-UC1-RelatedPerson-BiologicalFather.md)

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| Biologischer Vater | Père biologique | `RelatedPerson.relationship` | [Parent](ValueSet-parent.md) | SNOMED CT: 9947008 'Natural father' |
| Sozialer Vater | Père social | `RelatedPerson.relationship` | [Parent](ValueSet-parent.md) | SNOMED CT: TBD, see open issue[#10](https://github.com/hl7ch/ch-epreg/issues/10) |
| Soziale Mutter | Mère sociale | `RelatedPerson.relationship` | [Parent](ValueSet-parent.md) | SNOMED CT: TBD, see open issue[#10](https://github.com/hl7ch/ch-epreg/issues/10) |

### Healthcare Provider

**Profile:** [CH EPREG PractitionerRole: Treating Healthcare Provider](StructureDefinition-ch-epreg-practitionerrole-thcp.md) 
 **Examples:** [Petra Sectionata @ Frauenzimmer](PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.json.md) (gynecologist), [Ruth Ohazwei @ Geburtsklinik](PractitionerRole-e1b736e3-10bb-41aa-8d17-c7ba28895880.json.md) (midwife)

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| Gynäkologin/Gynäkologe | Gynécologue | `PractitionerRole.code` | [HCProfessional.hcProfession](http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcProfession) | SNOMED CT: 309343006 'Physician' |
| `PractitionerRole.specialty` | [HCProfessional.hcSpecialisation](http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcSpecialisation) | MedReg: 1003 'Gynaecology and obstetrics' | | |
| Hebamme | Sage-femme | `PractitionerRole.code` | [HCProfessional.hcProfession](http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcProfession) | SNOMED CT: 309453006 'Registered midwife' |
| Hausärztin/Hausarzt | Médecin de famille | `PractitionerRole.code` | [HCProfessional.hcProfession](http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcProfession) | SNOMED CT: 309343006 'Physician' |
| `PractitionerRole.specialty` | [HCProfessional.hcSpecialisation](http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcSpecialisation) | MedReg: 1040 'General medical practitioner' | | |
| Kinderärztin/Kinderarzt | Pédiatre | `PractitionerRole.code` | [HCProfessional.hcProfession](http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcProfession) | SNOMED CT: 309343006 'Physician' |
| `PractitionerRole.specialty` | [HCProfessional.hcSpecialisation](http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcSpecialisation) | MedReg: 1006 'Paediatrics' | | |
| Apothekerin/Apotheker | Pharmacien | `PractitionerRole.code` | [HCProfessional.hcProfession](http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcProfession) | SNOMED CT: 46255001 'Pharmacist' |
| Pflegefachperson | Infirmier | `PractitionerRole.code` | [HCProfessional.hcProfession](http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcProfession) | SNOMED CT: 106292003 'Professional nurse' |
| Anderer Leistungserbringende | Autres fournisseurs de prestations | `PractitionerRole.code` | [HCProfessional.hcProfession](http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcProfession) | As both ValueSets have a[preferred](https://hl7.org/fhir/R4/terminologies.html#preferred)binding to the element, the values SHOULD be from the specified ValueSets, but also other codes can be used. |
| `PractitionerRole.specialty` | [HCProfessional.hcSpecialisation](http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcSpecialisation) | | | |

### Laboratory Results

As indicated in the mapping, the specific code (e.g. LOINC) should be used for laboratory results. The Observation profile for laboratory results is based on the [CH LAB-Report profile](https://fhir.ch/ig/ch-lab-report/StructureDefinition-ch-lab-observation-results-laboratory.html) and uses the same [Laboratory Code value set](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html). The binding to the `Observation.code` element is [preferred](https://hl7.org/fhir/R4/terminologies.html#preferred), meaning that if no suitable code is found in the value set, a code outside of the value set can be used.

**Profile:** [CH EPREG Observation (Base): Results Laboratory](StructureDefinition-ch-epreg-observation-results-lab.md) 
 **Examples:** see [here](StructureDefinition-ch-epreg-observation-results-lab-examples.md)

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| Allgemeine Bakteriologie(Vagina, Zervix, Urethra) | Bactériologie générale(vagin, col de l’utérus, urètre) | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Allgemeine Mikrobiologie | Microbiologie générale | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Antikörpersuchtest | Test de recherche d’anticorps | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Beta-HCG | Bêta-HCG | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Bilirubin, direkt, gesamt | Bilirubine, directe, totale | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Chlamydien | Chlamydia | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| CMV | CMV | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| CRP | Protéine C-réactive (CRP) | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Cytomegalovirus | Cytomégalovirus | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Erythrozyten | Érythrocytes | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Erythrozyten, direkter Testgegen humane globuline | Érythrocytes, test directà l’antiglobuline humaine | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Extraktion von menschlichen Nukleinsäuren | Extraction d’acides nucléiques humains | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Ferritin | Ferritine | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Folat | Acide folique | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Hämoglobin | Hémoglobine | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Hämoglobin A1c | Hémoglobine A1c | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Hämokrit | Hématocrite | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Hepatitis B | Hépatite B | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| HIV | VIH | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Leukozyten | Leucocytes | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Lues | Syphilis | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| MCH | MCH | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| MCHC | MCHC | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| MCV | MCV | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| MPV | MPV | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Molekulare Genotypisierungder fötalen Erythrozytenantigene | Génotypage moléculaire desantigènes érythrocytaires fœtaux | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Nüchternblutzucker | Glycémie à jeun | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| OGTT | Hyperglycémie provoquéepar voie orale | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Parvo-B19 | Parvovirus B19 | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| RDW | RDW | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Rubella | Rubéole | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Streptokokken B | Streptocoques B | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Thrombozyten | Thrombocytes | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Thyretropin (TSH) | Thyrotropine (TSH) | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Toxoplasmose | Toxoplasmose | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Urin, nativ | Urine, native | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Varizellen | Varicelle | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Vitamin B12 | Vitamine B12 | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Vitamin D | Vitamine D | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |
| Weitere | Autres | `Observation.code` | [Laboratory Code](https://hl7.eu/fhir/laboratory/ValueSet-lab-obsCode-eu-lab.html) | Provide the explicit code (e.g. LOINC) |

### Measurement Results

**Profile:** [CH EPREG Observation (Base): Results Laboratory](StructureDefinition-ch-epreg-observation-results-lab.md) 
 **Examples:** see [here](StructureDefinition-ch-epreg-observation-results-lab-examples.md)

#### Qualitative

In the FHIR representation of the qualitative measurement result, the specific examination is given in `Observation.code` / `Observation.component.code` (e.g. antibody search test) and the non-specific result (positive / negative) in `Observation.valueCodeableConcept` / `Observation.component.valueCodeableConcept`.

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| Positiv | Positif | `Observation.valueCodeableConcept``Observation.component.valueCodeableConcept` | - | SCT: 10828004 'Positive' |
| Negativ | Négatif | `Observation.valueCodeableConcept``Observation.component.valueCodeableConcept` | - | SCT: 260385009 'Negative' |
| Antikörper-Suchtest negativ | Test de recherche d’anticorps négatif | `Observation.valueCodeableConcept` | - | SCT: 260385009 'Negative' |
| Antikörper-Suchtest positiv | Test de recherche d’anticorps positif | `Observation.valueCodeableConcept` | - | SCT: 10828004 'Positive' |
| Chlamydia trachomatisNachweis im Urin positiv | Test urinaire pour Chlamydiatrachomatis positif | `Observation.valueCodeableConcept` | - | SCT: 10828004 'Positive' |
| Chlamydia trachomatisNachweis im Urin negativ | Test urinaire pour Chlamydiatrachomatis négatif | `Observation.valueCodeableConcept` | - | SCT: 260385009 'Negative' |
| HBs-Antigen-Nachweis positiv | Test de l’antigène HBs positif | `Observation.valueCodeableConcept` | - | SCT: 10828004 'Positive' |
| HBs-Antigen-Nachweis negativ | Test de l’antigène HBs négatif | `Observation.valueCodeableConcept` | - | SCT: 260385009 'Negative' |
| Rubelle-Antikörpertest negativ | Test des anticorps de la rubéole négatif | `Observation.valueCodeableConcept` | - | SCT: 260385009 'Negative' |
| Rubella-Antikörpertest positiv | Test des anticorps de la rubéole positif | `Observation.valueCodeableConcept` | - | SCT: 10828004 'Positive' |
| Lues Titer Test positiv | Test de titrage positif pour la syphilis | `Observation.valueCodeableConcept` | - | SCT: 10828004 'Positive' |
| Lues Titer Test negativ | Test de titrage négatif pour la syphilis | `Observation.valueCodeableConcept` | - | SCT: 260385009 'Negative' |

#### Unit

If a measurement result is expressed using a unit, it is represented in FHIR as `Observation.valueQuantity` / `Observation.component.valueQuantity`. According to the FHIR specification for the [Quantity data type](https://hl7.org/fhir/R4/datatypes.html#Quantity), **“If the unit can be coded in UCUM and a code is provided, it SHOULD be a UCUM code”**.

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| Titer | Titre | `Observation.valueQuantity``Observation.component.valueQuantity` | [UCUM Codes](https://hl7.org/fhir/R4/valueset-ucum-units.html) | UCUM: {titer} 'titer' |
| 10*6/µl | 10*6/µl | `Observation.valueQuantity``Observation.component.valueQuantity` | [UCUM Codes](https://hl7.org/fhir/R4/valueset-ucum-units.html) | UCUM: 10*6/uL 'million per microliter' |
| fl | fl | `Observation.valueQuantity``Observation.component.valueQuantity` | [UCUM Codes](https://hl7.org/fhir/R4/valueset-ucum-units.html) | UCUM: fL 'femtoliter' |
| g/dl | g/dl | `Observation.valueQuantity``Observation.component.valueQuantity` | [UCUM Codes](https://hl7.org/fhir/R4/valueset-ucum-units.html) | UCUM: g/dL 'gram per deciliter' |
| g/l | g/l | `Observation.valueQuantity``Observation.component.valueQuantity` | [UCUM Codes](https://hl7.org/fhir/R4/valueset-ucum-units.html) | UCUM: g/L 'gram per liter' |
| G/l | G/l | `Observation.valueQuantity``Observation.component.valueQuantity` | [UCUM Codes](https://hl7.org/fhir/R4/valueset-ucum-units.html) | UCUM: 10*9/L 'billion per liter' |
| IE/ml | UI/ml | `Observation.valueQuantity``Observation.component.valueQuantity` | [UCUM Codes](https://hl7.org/fhir/R4/valueset-ucum-units.html) | UCUM: [IU]/mL 'international unit per milliliter' |
| l/l | l/l | `Observation.valueQuantity``Observation.component.valueQuantity` | [UCUM Codes](https://hl7.org/fhir/R4/valueset-ucum-units.html) | UCUM: L/L 'liter per liter' |
| mmol/l | mmol/l | `Observation.valueQuantity``Observation.component.valueQuantity` | [UCUM Codes](https://hl7.org/fhir/R4/valueset-ucum-units.html) | UCUM: mmol/L 'millimole per liter' |
| pg | pg | `Observation.valueQuantity``Observation.component.valueQuantity` | [UCUM Codes](https://hl7.org/fhir/R4/valueset-ucum-units.html) | UCUM: pg 'picogram' |
| T/l | T/l | `Observation.valueQuantity``Observation.component.valueQuantity` | [UCUM Codes](https://hl7.org/fhir/R4/valueset-ucum-units.html) | UCUM: 10*12/L 'trillion per liter' |

### Blood Group & Rhesus

**Profile:** [CH EPREG Observation (Lab): Blood Group](StructureDefinition-ch-epreg-observation-blood-group.md) 
 **Example:** [Blood Group: AB Rh(D) positive](Observation-UC1-BloodGroup-20250205.md)

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| A | A | `Observation.valueCodeableConcept` | [Blood Group](ValueSet-blood-group.md) | SNOMED CT: 112144000 'Blood group A'SNOMED CT: 278149003 'Blood group A Rh(D) positive'SNOMED CT: 278152006 'Blood group A Rh(D) negative' |
| B | B | `Observation.valueCodeableConcept` | [Blood Group](ValueSet-blood-group.md) | SNOMED CT: 112149005 'Blood group B'SNOMED CT: 278150003 'Blood group B Rh(D) positive'SNOMED CT: 278153001 'Blood group B Rh(D) negative' |
| AB | AB | `Observation.valueCodeableConcept` | [Blood Group](ValueSet-blood-group.md) | SNOMED CT: 165743006 'Blood group AB'SNOMED CT: 278151004 'Blood group AB Rh(D) positive'SNOMED CT: 278154007 'Blood group AB Rh(D) negative' |
| O | O | `Observation.valueCodeableConcept` | [Blood Group](ValueSet-blood-group.md) | SNOMED CT: 58460004 'Blood group O'SNOMED CT: 278147001 'Blood group O Rh(D) positive'SNOMED CT: 278148006 'Blood group O Rh(D) negative' |

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| RhD positiv | RhD positif | `Observation.valueCodeableConcept` | [Blood Group](ValueSet-blood-group.md) | SNOMED CT: 165747007 'RhD positive'SNOMED CT: 278149003 'Blood group A Rh(D) positive'SNOMED CT: 278150003 'Blood group B Rh(D) positive'SNOMED CT: 278151004 'Blood group AB Rh(D) positive'SNOMED CT: 278147001 'Blood group O Rh(D) positive' |
| RhD negativ | RhD négatif | `Observation.valueCodeableConcept` | [Blood Group](ValueSet-blood-group.md) | SNOMED CT: 165746003 'RhD negative'SNOMED CT: 278152006 'Blood group A Rh(D) negative'SNOMED CT: 278153001 'Blood group B Rh(D) negative'SNOMED CT: 278154007 'Blood group AB Rh(D) negative'SNOMED CT: 278148006 'Blood group O Rh(D) negative' |

### Fetal RhD

**Profile:** [CH EPREG Observation (Lab): Fetal RhD](StructureDefinition-ch-epreg-observation-fetal-rhd.md) 
 **Example:** [Fetal RhD: RhD positive](Observation-UC1-FetalRhD-20250205.md)

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| RhD positiv | RhD positif | `Observation.valueCodeableConcept` | [Fetal RhD Antigen](ValueSet-fetal-rhd-antigen.md) | LOINC: LA22747-2 'RhD positive' |
| RhD negativ | RhD négatif | `Observation.valueCodeableConcept` | [Fetal RhD Antigen](ValueSet-fetal-rhd-antigen.md) | LOINC: LA22748-0 'RhD negative' |

### Further Examinations

There is no ValueSet mapping for further examinations, as the Observation resource representing the result of the examination requires a code that explicitly reflects the specific examination performed.

For example, in the case of amniotic fluid (Fruchtwasser / Liquide amniotique), relevant use cases for a maternity record might include:

* LOINC: 38386-9 'Color of Amniotic fluid': This Observation represents the color of the amniotic fluid, which can provide important clinical insights during pregnancy monitoring.
* LOINC: 1887-9 'Appearance of Amniotic fluid': This Observation covers the general visual appearance, such as clarity or turbidity, which is also significant in obstetric assessments.

**Profile:** [CH EPREG Observation (Base): Pregnancy Progress](StructureDefinition-ch-epreg-observation-preg-progress.md) 
 **Example:** [Digestion: Heartburn](Observation-1ce882f2-953f-428e-a90b-a55271020fca.md)

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| Beckenbodenprobleme / Inkontinenz | Dysfonctionnement du plancher pelvien / incontinence | `Observation.code` | - | Provide the explicit code (e.g. LOINC) |
| Belastungsbalance | Gestion du stress | `Observation.code` | - | Provide the explicit code (e.g. LOINC) |
| Besondere Beschwerden | Plaintes particulières | `Observation.code` | - | Provide the explicit code (e.g. LOINC) |
| Energie / Wohlbefinden / Schlaf | Énergie / bien-être / sommeil | `Observation.code` | - | Provide the explicit code (e.g. LOINC) |
| Fragen / Anliegen | Questions / demandes | `Observation.code` | - | Provide the explicit code (e.g. LOINC) |
| Fruchtwasser | Liquide amniotique | `Observation.code` | - | Provide the explicit code (e.g. LOINC) |
| Hämorrhoiden | Hémorroïdes | `Observation.code` | - | Provide the explicit code (e.g. LOINC) |
| Ödeme | Œdème | `Observation.code` | - | Provide the explicit code (e.g. LOINC) |
| Vaginale Abgänge | Écoulement vaginal | `Observation.code` | - | Provide the explicit code (e.g. LOINC) |
| Übelkeit | Nausées | `Observation.code` | - | Provide the explicit code (e.g. LOINC) |
| Varizen | Varices | `Observation.code` | - | Provide the explicit code (e.g. LOINC) |
| Verdauung | Digestion | `Observation.code` | - | Provide the explicit code (e.g. LOINC) |
| Weitere Befunde | Autres constatations | `Observation.code` | - | Provide the explicit code (e.g. LOINC) |

### Fetal Position

**Profile:** [CH EPREG Observation (Child): Fetal Position](StructureDefinition-ch-epreg-observation-fetal-position.md) 
 **Example:** [Vertex Presentation](Observation-UC1-FetalPosition-20250205.md), [Breech Presentation](Observation-4a907770-6665-4fb4-b186-afd0ddf48742.md)

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| Schädellage | Présentation céphalique | `Observation.valueCodeableConcept` | [Fetal Position](ValueSet-fetal-position.md) | SNOMED CT: 70028003 'Vertex presentation' |
| Beckenendlage | Présentation par le siège | `Observation.valueCodeableConcept` | [Fetal Position](ValueSet-fetal-position.md) | SNOMED CT: 6096002 'Breech presentation' |
| Querlage | Présentation transversale | `Observation.valueCodeableConcept` | [Fetal Position](ValueSet-fetal-position.md) | SNOMED CT: 73161006 'Transverse lie' |

